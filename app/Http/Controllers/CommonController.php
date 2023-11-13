<?php

namespace App\Http\Controllers;


use App\Menu;
use App\Settings;
use App\User;
use App\MenusDetails;
use App\SupportersAndServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; 
use Image;
class CommonController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $is_act_menu = '';  
        $is_act_s_menu = ''; 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        $menus_list = Menu::where('is_active', '=', 1)->get(); 

        if(request()->segment(1)=='companies'){$is_act_menu = 'companies';  }
        if(request()->segment(1)=='members'){$is_act_menu = 'members';  }
        if(request()->segment(1)=='services'){$is_act_menu = 'services';  }
 
        
            $ss_type_seg = request()->segment(1);
            $ss_type_ex = explode('-',$ss_type_seg);
            $ss_type_val = $ss_type_ex['0'];

            $ss_data = SupportersAndServices::query();  
            if(request()->segment(1)=='companies'){ 
                $ss_data->where('ss_type','=','companies');
            }
            if(request()->segment(1)=='members'){ 
                $ss_data->where('ss_type','=','members');
            }
            if(request()->segment(1)=='services'){ 
                $ss_data->where('ss_type','=','services');
            }
            $ss_data->where('ss_is_active','=','1');

            $ss_data_list = $ss_data->get();
            
           return view('templates.index')->with('s_data',$s_data)->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('menus_list',$menus_list)->with('ss_type_val',$ss_type_val)->with('ss_data_list',$ss_data_list);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type){
        $headline = base64_decode($type); 
        $is_act_menu = $headline; 
        $is_act_s_menu = ''; 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        $menus_list = Menu::where('is_active', '=', 1)->get(); 

        return view('templates.create')->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('s_data',$s_data)->with('headline',$headline)->with('menus_list',$menus_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validatedData = $request->validate([
            'ss_name' => 'required|string',
            'ss_desc' => 'required|string', 
            
        ]);
      if($validatedData){
        $data= $request->all();  
        
        $ss_img_name = ''; 
        $time = time();
        
        if($file = $request->hasFile('ss_img_1')) { 
            $file = $request->file('ss_img_1');
            $ext = $file->getClientOriginalExtension();
            
            $thumb = Image::make($file->getRealPath())->resize(800, 800, function ($constraint) {
            });
            $img_path = public_path('/uploads/images/');
            $thumb_path = public_path('/uploads/images/thumb/');
            //filename to store
            $ss_img_name =  $data['headline'].'_'.$time.'.'.$ext;

 
            $file->move($img_path, $ss_img_name);
            $thumb->save($thumb_path.'/'.$ss_img_name);
            $img_path = '/uploads/images/'. $ss_img_name; 
        }
 
        // return;
        $ss_data = new SupportersAndServices(); 

        $ss_data->ss_name =  isset($data['ss_name'])?$data['ss_name']:'';
        $ss_data->ss_type =  isset($data['headline'])?$data['headline']:'';
        $ss_data->ss_desc = isset($data['ss_desc'])?$data['ss_desc']:''; 
        $ss_data->ss_website = isset($data['ss_website'])?$data['ss_website']:'';
        $ss_data->ss_facebook = isset($data['ss_facebook'])?$data['ss_facebook']:'';
        $ss_data->ss_twitter = isset($data['ss_twitter'])?$data['ss_twitter']:'';
        $ss_data->ss_linkedin = isset($data['ss_linkedin'])?$data['ss_linkedin']:''; 
        $ss_data->ss_img_1 = isset($ss_img_name)?$ss_img_name:'';  
        $ss_data->ss_img_path_1 = isset($img_path)?$img_path:'';  
        $ss_data->created_by =  Auth::user()->id;     
        $ss_data->updated_by =  Auth::user()->id;     
        $ss_data->deleted_by =  0;     
        $ss_data->created_at = now();
        $ss_data->save();

        
        return redirect()->route(''.$data['headline'].'.index')->with('create', ' Data successfully added !');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$ss_type){
        $ss_data = SupportersAndServices::select("*")->where("ss_id", "=", base64_decode($id))->first();  
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        $headline = base64_decode($ss_type); 
        $is_act_menu = $ss_type; 
        $is_act_s_menu = ''; 
        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        
        
        return view("templates.edit")->with('s_data',$s_data)->with('ss_data',$ss_data)->with('headline',$headline)->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('menus_list',$menus_list);
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
            'ss_name' => 'required|string',
            'ss_desc' => 'required|string', 
            
        ]);
        if($validatedData){
            $data= $request->all(); 
            $ss_img_name = ''; 
            $time = time();
            
            if($file = $request->hasFile('ss_img_1')) { 
                $file = $request->file('ss_img_1');
                $ext = $file->getClientOriginalExtension();
                
                $thumb = Image::make($file->getRealPath())->resize(800, 800, function ($constraint) {
                });
                $img_path = public_path('/uploads/images/');
                $thumb_path = public_path('/uploads/images/thumb/');
                //filename to store
                $ss_img_name =  $data['headline'].'_'.$time.'.'.$ext;

    
                $file->move($img_path, $ss_img_name);
                $thumb->save($thumb_path.'/'.$ss_img_name);
                $img_path = '/uploads/images/'. $ss_img_name; 
            }
 


            $update_data =array(
            'ss_name' => isset($data['ss_name'])?$data['ss_name']:'',    
            'ss_desc' => isset($data['ss_desc'])?$data['ss_desc']:'',    
            'ss_website' => isset($data['ss_website'])?$data['ss_website']:'',    
            'ss_facebook' => isset($data['ss_facebook'])?$data['ss_facebook']:'',    
            'ss_twitter' => isset($data['ss_twitter'])?$data['ss_twitter']:'',    
            'ss_linkedin' => isset($data['ss_linkedin'])?$data['ss_linkedin']:'',    
            'updated_by' => Auth::user()->id, 
            'updated_at' => now(), 
            );

            if($ss_img_name!=''){
                $update_data['ss_img_1'] = $ss_img_name;
                $update_data['ss_img_path_1'] = $img_path; 
            }

            SupportersAndServices::where("ss_id", "=",$data['ss_id'])->update($update_data);
            return redirect()->route(''.$data['headline'].'.index')->with('Update', ' Data successfully updated !');

        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$ps_type){
      $this_id = base64_decode($id); 
      $this_type = base64_decode($ps_type); 

        $update_data =array(
            'ss_is_active' => '0',
            'deleted_at' => now(),
            'deleted_by' => auth()->user()->id,
        );
        SupportersAndServices::where("ss_id", "=",$this_id)->update($update_data);
          
        
        return redirect()->route(''.$this_type.'.index')->with('create', ' Data successfully added !');
      
    }
    
    
  
}

