<?php

namespace App\Http\Controllers;


use App\Menu;
use App\User;
use App\MenusDetails;
use App\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; 
use Image;
class SettingsCtrl extends Controller
{
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(){
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 
        $is_act_menu = 'set'; 
        $is_act_s_menu = ''; 
        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        
        
        return view("admin.edit")->with('s_data',$s_data)->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('menus_list',$menus_list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
          $validatedData = $request->validate([ 
            's_admin_name' => 'required|string',
            's_site_name' => 'required|string',
            's_site_address' => 'required|string', 
            's_site_contact' => 'required|string', 
            
        ]);
        if($validatedData){
            $data= $request->all(); 
            
            $s_admin_logo_name = ''; 
            $s_site_logo_name = ''; 
            $time = time();
            
            if($file = $request->hasFile('s_admin_logo')) { 
                $file = $request->file('s_admin_logo');
                $ext = $file->getClientOriginalExtension();
                 
                $ps_img_path = public_path('/uploads/logo/'); 
                //filename to store
                $s_admin_logo_name =  'a_logo_'.$time.'.'.$ext;
    
                $file->move($ps_img_path, $s_admin_logo_name); 
            }else{
                $s_admin_logo_name = $data['s_admin_logo_val'];
            }
            if($file = $request->hasFile('s_site_logo')) { 
                $file = $request->file('s_site_logo');
                $ext = $file->getClientOriginalExtension();
                 
                $ps_img_path = public_path('/uploads/logo/'); 
                //filename to store
                $s_site_logo_name =  's_logo_'.$time.'.'.$ext;
    
                $file->move($ps_img_path, $s_site_logo_name); 
            }else{
                $s_site_logo_name = $data['s_site_logo_val'];
            }


            $update_data =array(
                's_admin_name' => isset($data['s_admin_name'])?$data['s_admin_name']:'',    
                's_site_name' => isset($data['s_site_name'])?$data['s_site_name']:'',    
                's_site_address' => isset($data['s_site_address'])?$data['s_site_address']:'',    
                's_site_contact' => isset($data['s_site_contact'])?$data['s_site_contact']:'',    
                'updated_by' => Auth::user()->id, 
                'updated_at' => now(), 
            );

            if($s_admin_logo_name!=''){
                $update_data['s_admin_logo'] = $s_admin_logo_name; 
            }

            if($s_site_logo_name!=''){
                $update_data['s_site_logo'] = $s_site_logo_name; 
            }

            if($s_admin_logo_name!='' && $s_site_logo_name!=''){
                Settings::where("s_id", "=",$data['s_id'])->update($update_data);
                return redirect()->route('settings.edit')->with('create', 'Details Updated successfully!');
            }else{
                return redirect()->route('settings.edit')->with('Error', 'Please select the images');

            }

        }
    }

    
    
  
}

