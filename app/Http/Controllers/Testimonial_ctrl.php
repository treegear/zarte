<?php

namespace App\Http\Controllers;


use App\Menu;
use App\Settings;
use App\User;
use App\MenusDetails;
use App\SupportersAndServices;
use App\Testimonials;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; 
use Image;
class Testimonial_ctrl extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $is_act_menu = 'teee';  
        $is_act_s_menu = ''; 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        $menus_list = Menu::where('is_active', '=', 1)->get(); 

        $te_list = Testimonials::get();
            
        return view('testimonial.index')->with('s_data',$s_data)->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('menus_list',$menus_list)->with('te_list',$te_list);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){  
        $is_act_menu = 'teee'; 
        $is_act_s_menu = ''; 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        $menus_list = Menu::where('is_active', '=', 1)->get(); 

        return view('testimonial.create')->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('s_data',$s_data)->with('menus_list',$menus_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validatedData = $request->validate([
            'te_title' => 'required|string',
            'te_desc' => 'required|string',  
            'te_name' => 'required|string', 
            'te_desigination' => 'required|string', 
            
        ]);
      if($validatedData){
        $data= $request->all();  
        
        $te_img_name = ''; 
        $time = time();
        
        if($file = $request->hasFile('te_img_1')) { 
            $file = $request->file('te_img_1');
            $ext = $file->getClientOriginalExtension();
            
            $thumb = Image::make($file->getRealPath())->resize(800, 800, function ($constraint) {
            });
            $img_path = public_path('/uploads/images/');
            $thumb_path = public_path('/uploads/images/thumb/');
            //filename to store
            $te_img_name =  'testi_'.$time.'.'.$ext;

 
            $file->move($img_path, $te_img_name);
            $thumb->save($thumb_path.'/'.$te_img_name);
            $img_path = '/uploads/images/'. $te_img_name; 
        }
 
        // return;
        $te_data = new Testimonials(); 

        $te_data->te_title =  isset($data['te_title'])?$data['te_title']:'';
        $te_data->te_desc =  isset($data['te_desc'])?$data['te_desc']:'';
        $te_data->te_name = isset($data['te_name'])?$data['te_name']:''; 
        $te_data->te_desigination = isset($data['te_desigination'])?$data['te_desigination']:''; 
        $te_data->te_img = isset($te_img_name)?$te_img_name:'';   
        $te_data->created_by =  Auth::user()->id;     
        $te_data->updated_by =  Auth::user()->id;     
        $te_data->deleted_by =  0;     
        $te_data->created_at = now();
        $te_data->save();

        
        return redirect()->route('testimonial.index')->with('create', ' Data successfully added !');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $te_data = Testimonials::select("*")->where("te_id", "=", base64_decode($id))->first();  
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 
 
        $is_act_menu = 'teee'; 
        $is_act_s_menu = ''; 
        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        
        
        return view("testimonial.edit")->with('s_data',$s_data)->with('te_data',$te_data)->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('menus_list',$menus_list);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'te_title' => 'required|string',
            'te_desc' => 'required|string', 
            'te_name' => 'required|string', 
            'te_desigination' => 'required|string', 
            
        ]);
        if($validatedData){
            $data= $request->all(); 
            $te_img_name = ''; 
            $time = time();
            
            if($file = $request->hasFile('te_img_1')) { 
                $file = $request->file('te_img_1');
                $ext = $file->getClientOriginalExtension();
                
                $thumb = Image::make($file->getRealPath())->resize(800, 800, function ($constraint) {
                });
                $img_path = public_path('/uploads/images/');
                $thumb_path = public_path('/uploads/images/thumb/');
                //filename to store
                $te_img_name =  'testi_'.$time.'.'.$ext;

    
                $file->move($img_path, $te_img_name);
                $thumb->save($thumb_path.'/'.$te_img_name);
                $img_path = '/uploads/images/'. $te_img_name; 
            }
 


            $update_data =array(
            'te_title' => isset($data['te_title'])?$data['te_title']:'',    
            'te_desc' => isset($data['te_desc'])?$data['te_desc']:'',    
            'te_name' => isset($data['te_name'])?$data['te_name']:'',    
            'te_desigination' => isset($data['te_desigination'])?$data['te_desigination']:'',       
            'updated_by' => Auth::user()->id, 
            'updated_at' => now(), 
            );

            if($te_img_name!=''){
                $update_data['te_img'] = $te_img_name; 
            }

            Testimonials::where("te_id", "=",$data['te_id'])->update($update_data);
            return redirect()->route('testimonial.index')->with('Update', ' Data successfully updated !');

        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
      $this_id = base64_decode($id);  

        $update_data =array(
            'te_is_active' => '0',
            'deleted_at' => now(),
            'deleted_by' => auth()->user()->id,
        );
        Testimonials::where("te_id", "=",$this_id)->update($update_data);
          
        
        return redirect()->route('testimonials.index')->with('create', ' Data successfully Deleted !');
      
    }
    
    
  
}

