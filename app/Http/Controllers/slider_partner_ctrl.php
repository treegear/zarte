<?php

namespace App\Http\Controllers;


use App\Menu;

use App\Settings;
use App\User;
use App\MenusDetails;
use App\PartnersAndSliders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; 
use Image;
class slider_partner_ctrl extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        

        $is_act_menu = '';  
        $is_act_s_menu = ''; 

        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        if(request()->segment(1)=='slider'){$is_act_menu = 'slider';  }
        if(request()->segment(1)=='partners'){$is_act_menu = 'partners';  } 
 
        
            $ps_type_val = request()->segment(1);
            $ps_data = PartnersAndSliders::query();  
            if(request()->segment(1)=='slider'){ 
                $ps_data->where('ps_type','=','slider');
            }
            if(request()->segment(1)=='partners'){ 
                $ps_data->where('ps_type','=','partners');
            } 
            $ps_data->where('ps_is_active','=','1');

            $ps_data_list = $ps_data->get();
            
           return view('ps_views.index')->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('s_data',$s_data)->with('menus_list',$menus_list)->with('ps_type_val',$ps_type_val)->with('ps_data_list',$ps_data_list);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        $headline = base64_decode($type); 
        $is_act_menu = $headline; 
        $is_act_s_menu = ''; 
        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        return view('ps_views.create')->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('headline',$headline)->with('menus_list',$menus_list)->with('s_data',$s_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();  
        
        $ps_img_name = ''; 
        $time = time();
        
        if($file = $request->hasFile('ps_img_1')) { 
            $file = $request->file('ps_img_1');
            $ext = $file->getClientOriginalExtension();
            
            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $ps_img_path = public_path('/uploads/images/');
            $thumb_path = public_path('/uploads/images/thumb/');
            //filename to store
            $ps_img_name =  $data['headline'].'_'.$time.'.'.$ext;

 
            $file->move($ps_img_path, $ps_img_name);
            $thumb->save($thumb_path.'/'.$ps_img_name);
            $ps_img_path = '/uploads/images/'. $ps_img_name; 
        }
 
        // return;

        if($ps_img_name==''){
            
            return redirect()->route(''.$data['headline'].'.index')->with('error', ' Please choose an image');
        }
        // var_dump($data);return;
        $ps_data = new PartnersAndSliders(); 

        $ps_data->ps_name =  isset($data['ps_name'])?$data['ps_name']:'';
        $ps_data->ps_sub_text =  isset($data['ps_sub_text'])?$data['ps_sub_text']:'';
        $ps_data->ps_type =  isset($data['headline'])?$data['headline']:'';  
        $ps_data->ps_img_1 = isset($ps_img_name)?$ps_img_name:'';  
        $ps_data->ps_img_path_1 = isset($ps_img_path)?$ps_img_path:'';  
        $ps_data->created_by =  Auth::user()->id;     
        $ps_data->updated_by =  Auth::user()->id;     
        $ps_data->deleted_by =  0;     
        $ps_data->created_at = now();
        $ps_data->save();

        
        return redirect()->route(''.$data['headline'].'.index')->with('create', ' Data successfully added !');
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$ps_type){
        $ps_data = PartnersAndSliders::select("*")->where("ps_id", "=", base64_decode($id))->first();  

        $headline = base64_decode($ps_type); 
        $is_act_menu = $ps_type; 
        $is_act_s_menu = ''; 
        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 
        
        
        return view("ps_views.edit")->with('ps_data',$ps_data)->with('headline',$headline)->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('menus_list',$menus_list)->with('s_data',$s_data);
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

        $data= $request->all();  
        
        $ps_img_name = ''; 
        $time = time();
        
        if($file = $request->hasFile('ps_img_1')) { 
            $file = $request->file('ps_img_1');
            $ext = $file->getClientOriginalExtension();
            
            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $ps_img_path = public_path('/uploads/images/');
            $thumb_path = public_path('/uploads/images/thumb/');
            //filename to store
            $ps_img_name =  $data['headline'].'_'.$time.'.'.$ext;

 
            $file->move($ps_img_path, $ps_img_name);
            $thumb->save($thumb_path.'/'.$ps_img_name);
            $ps_img_path = '/uploads/images/'. $ps_img_name; 
        }
 
        $update_data =array(
            'ps_name' => isset($data['ps_name'])?$data['ps_name']:'',    
            'ps_sub_text' => isset($data['ps_sub_text'])?$data['ps_sub_text']:'',    
            'ps_img_1' => isset($data['ps_img_1'])?$data['ps_img_1']:'',       
            'updated_by' => Auth::user()->id, 
            'updated_at' => now(), 
        );

        if($ps_img_name!=''){
            $update_data['ps_img_1'] = $ps_img_name;
            $update_data['ps_img_path_1'] = $ps_img_path; 
        }

        PartnersAndSliders::where("ps_id", "=",$data['ps_id'])->update($update_data);
        return redirect()->route(''.$data['headline'].'.index')->with('Update', ' Data successfully updated !');
       }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$ps_type)
    {
      $this_id = base64_decode($id); 
      $this_type = base64_decode($ps_type); 

        $update_data =array(
            'ps_is_active' => '0',
            'deleted_at' => now(),
            'deleted_by' => auth()->user()->id,
        );
        PartnersAndSliders::where("ps_id", "=",$this_id)->update($update_data);
          
        
        return redirect()->route(''.$this_type.'.index')->with('create', ' Data successfully added !');
      
    }

    
    
  
}

