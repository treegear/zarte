<?php

namespace App\Http\Controllers;


use App\Menu;
use App\Settings;
use App\User;
use App\MenusDetails;
use App\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; 
use Image;
class MenusController extends Controller
{
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m_data = Menu::select("*")->where("m_id", "=", base64_decode($id))->first(); 
        $m_details = MenusDetails::where("md_m_id", "=", base64_decode($id))->first();
        $c_details = Contacts::where("c_id", "=", '1')->first();


        $is_act_menu = 'mm'; 
        $is_act_s_menu = $m_data['m_slug']; 
        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 
        
        
        return view("templates.".$m_data['m_slug']."")->with('m_data',$m_data)->with('m_details',$m_details)->with('c_details',$c_details)->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('menus_list',$menus_list)->with('s_data',$s_data);
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
            // 'emp_id' => 'required|string',
            'metta_title' => 'required|string',
            'metta_desc' => 'required|string',
            'metta_keywords' => 'required|string', 
            
        ]);
        if($validatedData){
        $data= $request->all(); 
        $resfnametostore = '';
        $filenametostore = '';
        $smallthumbnail = '';
        $time = time();


        if($file = $request->hasFile('m_banner_img')) { 
            $file = $request->file('m_banner_img');
            $ext = $file->getClientOriginalExtension();
            
            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $destinationPath = public_path('/uploads/banner/');
            $destinationPath1 = public_path('/uploads/banner/thumb/');
            //filename to store
            $filenametostore =  $data['m_slug'].'_'.$time.'.'.$ext; 
 
            $file->move($destinationPath, $filenametostore);
            $thumb->save($destinationPath1.'/'.$filenametostore);
            $ba_img = '/uploads/banner/'. $filenametostore; 

        }


        $update_data =array(
        'metta_title' => isset($data['metta_title'])?$data['metta_title']:'',    
        'metta_desc' => isset($data['metta_desc'])?$data['metta_desc']:'',    
        'metta_keywords' => isset($data['metta_keywords'])?$data['metta_keywords']:'',    
        'updated_by' => Auth::user()->id, 
        'updated_at' => now(), 
        );

        if($filenametostore!=''){
            $update_data['m_banner_img'] = $filenametostore;
            $update_data['m_banner_img_path'] = $ba_img; 
        }

        Menu::where("m_id", "=",$data['m_id'])->update($update_data);
        return redirect()->route('menus.edit',base64_encode($data['m_id']))->with('create', 'Details Updated successfully!');
      }
    }

    /**
     * Update the page details.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function p_update(Request $request)
    {
          $validatedData = $request->validate([
            // 'emp_id' => 'required|string',
            'md_title' => 'required|string', 
            'md_desc' => 'required|string', 
            
        ]);
        if($validatedData){
        $data= $request->all(); 
        $resfnametostore = '';
        $img_1_name = '';
        $img_1_thumb_name = '';

        $img_2_name = '';
        $img_2_thumb_name = '';

        $time = time();


        if($file = $request->hasFile('md_img_1')) { 
            $file = $request->file('md_img_1');
            $ext = $file->getClientOriginalExtension();
            
            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $destinationPath = public_path('/uploads/images/');
            $destinationPath1 = public_path('/uploads/images/thumb/');
            //filename to store
            $img_1_name =  'main_'.$time.'.'.$ext; 
 
            $file->move($destinationPath, $img_1_name);
            $thumb->save($destinationPath1.'/'.$img_1_name);
            $img_1_path = '/uploads/images/'. $img_1_name; 

        }

        if($file = $request->hasFile('md_img_2')) { 
            $file = $request->file('md_img_2');
            $ext = $file->getClientOriginalExtension();
            
            $thumb = Image::make($file->getRealPath())->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $desti_path = public_path('/uploads/sub_images/');
            $desti_path2 = public_path('/uploads/sub_images/thumb/');
            //filename to store
            $img_2_name =  'sub_'.$time.'.'.$ext; 
 
            $file->move($desti_path, $img_2_name);
            $thumb->save($desti_path2.'/'.$img_2_name);
            $img_2_path = '/uploads/sub_images/'. $img_2_name; 

        }


        $update_data =array(
        'md_title' => isset($data['md_title'])?$data['md_title']:'',    
        'md_sub_title' => isset($data['md_sub_title'])?$data['md_sub_title']:'',    
        'md_desc' => isset($data['md_desc'])?$data['md_desc']:'',    
        'md_content1' => isset($data['md_content1'])?$data['md_content1']:'',    
        'md_content2' => isset($data['md_content2'])?$data['md_content2']:'',    
        'md_desc_2' => isset($data['md_desc_2'])?$data['md_desc_2']:'',    
        'updated_by' => Auth::user()->id, 
        'updated_at' => now(), 
        );

        if($img_1_name!=''){
            $update_data['md_img_1'] = $img_1_name;
            $update_data['md_img_path_1'] = $img_1_path; 
        }

        if($img_2_name!=''){
            $update_data['md_img_2'] = $img_2_name;
            $update_data['md_img_path_2'] = $img_2_path; 
        }

        MenusDetails::where("md_id", "=",$data['md_id'])->update($update_data);
        return redirect()->route('menus.edit',base64_encode($data['md_m_id']))->with('create', 'Details Updated successfully!');
      }
    }

    /**
     * Update the contact details.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function c_update(Request $request)
    {
          $validatedData = $request->validate([ 
            'c_title' => 'required|string', 
            'c_desc' => 'required|string', 
            'c_phone' => 'required|string', 
            'c_address' => 'required|string', 
            'c_email' => 'required|string', 
            
        ]);
        if($validatedData){
        $data= $request->all();  


        $update_data =array(
        'c_title' => isset($data['c_title'])?$data['c_title']:'',    
        'c_desc' => isset($data['c_desc'])?$data['c_desc']:'',    
        'c_phone' => isset($data['c_phone'])?$data['c_phone']:'',    
        'c_address' => isset($data['c_address'])?$data['c_address']:'',    
        'c_email' => isset($data['c_email'])?$data['c_email']:'',     
        'updated_by' => Auth::user()->id, 
        'updated_at' => now(), 
        ); 
        Contacts::where("c_id", "=",$data['c_id'])->update($update_data);
        return redirect()->route('menus.edit',base64_encode($data['m_id']))->with('create', 'Details Updated successfully!');
      }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
  
}

