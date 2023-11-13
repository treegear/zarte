<?php

namespace App\Http\Controllers;


use App\Menu;
use App\Settings;
use App\User;
use App\MenusDetails;
use App\Products;
use App\ProductSubImgs;
use App\ProductCategorys;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Auth; 
use Image;
class ProductsCate_ctrl extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $is_act_menu = 'cate';  
        $is_act_s_menu = 'prod'; 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        $menus_list = Menu::where('is_active', '=', 1)->get();  
        $pc_data_list = ProductCategorys::where('pc_is_active','=','1')->get();
            
        return view('pc_views.index')->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('s_data',$s_data)->with('menus_list',$menus_list)->with('pc_data_list',$pc_data_list);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){ 
        $is_act_menu = 'cate';  
        $is_act_s_menu = 'prod'; 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        $menus_list = Menu::where('is_active', '=', 1)->get(); 

        return view('pc_views.create')->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('s_data',$s_data)->with('menus_list',$menus_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validatedData = $request->validate([
            'pc_name' => 'required|string',             
        ]);
      if($validatedData){
        $data= $request->all();  
        // return;
        $slug_data ='';
        if($data['pc_slug']!=''){
            $slug_val = str_replace(' ', '-', $data['pc_slug']); 
   			$slug_val = preg_replace('/[^A-Za-z0-9\-]/', '', $slug_val);
			$slug_val = strtolower($slug_val);
			$slug_data 	= $slug_val;

        }
        $pc_data = new ProductCategorys();        

        $pc_data->pc_slug =  isset($slug_data)?$slug_data:'';
        $pc_data->pc_name =  isset($data['pc_name'])?$data['pc_name']:''; 
        
        $pc_data->created_by =  Auth::user()->id;     
        $pc_data->updated_by =  Auth::user()->id;     
        $pc_data->deleted_by =  0;     
        $pc_data->created_at = now();
        $pc_data->save();
 
        return redirect()->route('productCategory.index')->with('create', ' Data successfully added !');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){  
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 
 
        $is_act_menu = 'cate';  
        $is_act_s_menu = 'prod'; 
        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        
        $pc_data = ProductCategorys::select("*")->where("pc_id", "=", base64_decode($id))->first();   
        return view("pc_views.edit")->with('s_data',$s_data)->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('menus_list',$menus_list)->with('pc_data',$pc_data) ;
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
            'pc_name' => 'required|string', 
            
        ]);
        if($validatedData){
            $data= $request->all();  

            $update_data =array(
                'pc_slug' => isset($data['pc_slug'])?$data['pc_slug']:'',    
                'pc_name' => isset($data['pc_name'])?$data['pc_name']:'',      
                'updated_by' => Auth::user()->id, 
                'updated_at' => now(), 
            );
 
            ProductCategorys::where("pc_id", "=",$data['pc_id'])->update($update_data);
     
            return redirect()->route('productCategory.index')->with('create', ' Data successfully updated !');

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
            'pc_is_active' => '0',
            'deleted_at' => now(),
            'deleted_by' => auth()->user()->id,
        );
        ProductCategorys::where("pc_id", "=",$this_id)->update($update_data);
          
        
        return redirect()->route('productCategory.index')->with('create', ' Data successfully Deleted !');
      
    }
    
    
  
}

