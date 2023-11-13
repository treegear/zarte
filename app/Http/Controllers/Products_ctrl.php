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
class Products_ctrl extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $is_act_menu = 'prod';  
        $is_act_s_menu = 'prod'; 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        $menus_list = Menu::where('is_active', '=', 1)->get();  
        $pro_data_list = Products::select('products.*','product_categorys.pc_name',)->leftJoin('product_categorys', 'products.pro_pc_id', '=', 'product_categorys.pc_id')->where('pro_is_active','=','1')->orderBy('created_by', 'desc')->get();
            
        return view('products.index')->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('s_data',$s_data)->with('menus_list',$menus_list)->with('pro_data_list',$pro_data_list);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){ 
        $is_act_menu = 'prod'; 
        $is_act_s_menu = 'prod'; 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        $pc_list = ProductCategorys::where('pc_is_active','=','1')->get();

        return view('products.create')->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('s_data',$s_data)->with('menus_list',$menus_list)->with('pc_list',$pc_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validatedData = $request->validate([
            'pro_slug' => 'required|string',
            // 'pro_pc_id' => 'required|string',
            'pro_metta_title' => 'required|string',
            'pro_metta_desc' => 'required|string',
            'pro_metta_keywords' => 'required|string',
            'pro_title' => 'required|string',
            'pro_price' => 'required|string', 
            'pro_s_price' => 'required|string', 
            'pro_desc' => 'required|string', 
            'pro_features' => 'required|string', 
            
        ]);
      if($validatedData){
        $data= $request->all();  
        
        $pro_img_name = ''; 
        $time = time();
        
        if($file = $request->hasFile('pro_img_1')) { 
            $file = $request->file('pro_img_1');
            $ext = $file->getClientOriginalExtension();
            
            $thumb = Image::make($file->getRealPath())->resize(800, 800, function ($constraint) {
            });
            $img_path = public_path('/uploads/products/');
            $thumb_path = public_path('/uploads/products/thumb/');
            //filename to store
            $pro_img_name =  'pro_'.$time.'.'.$ext;

 
            $file->move($img_path, $pro_img_name);
            $thumb->save($thumb_path.'/'.$pro_img_name); 
        }
 
        // return;
        $slug_data ='';
        if($data['pro_slug']!=''){
            $slug_val = str_replace(' ', '-', $data['pro_slug']); 
   			$slug_val = preg_replace('/[^A-Za-z0-9\-]/', '', $slug_val);
			$slug_val = strtolower($slug_val);
			$slug_data 	= $slug_val;

        }
        $pro_data = new Products();        

        $pro_data->pro_pc_id =  isset($data['pro_pc_id'])?$data['pro_pc_id']:'';
        $pro_data->pro_slug =  isset($slug_data)?$slug_data:'';
        $pro_data->pro_metta_title =  isset($data['pro_metta_title'])?$data['pro_metta_title']:'';
        $pro_data->pro_metta_desc =  isset($data['pro_metta_desc'])?$data['pro_metta_desc']:'';
        $pro_data->pro_metta_keywords =  isset($data['pro_metta_keywords'])?$data['pro_metta_keywords']:'';
        $pro_data->pro_title =  isset($data['pro_title'])?$data['pro_title']:'';
        $pro_data->pro_price =  isset($data['pro_price'])?$data['pro_price']:'';
        $pro_data->pro_s_price = isset($data['pro_s_price'])?$data['pro_s_price']:''; 
        $pro_data->pro_desc = isset($data['pro_desc'])?$data['pro_desc']:'';
        $pro_data->pro_features = isset($data['pro_features'])?$data['pro_features']:''; 

        $pro_data->pro_img = isset($pro_img_name)?$pro_img_name:'';  
        $pro_data->created_by =  Auth::user()->id;     
        $pro_data->updated_by =  Auth::user()->id;     
        $pro_data->deleted_by =  0;     
        $pro_data->created_at = now();
        $pro_data->save();

        // var_dump($pro_data->id);return;
        if($pro_data->id!=''){
            if($file = $request->hasFile('mu_img_1')) { 
                $file = $request->file('mu_img_1');
                foreach($file as $mu_row){
                    $ext = $mu_row->getClientOriginalExtension();
                    
                    $thumb = Image::make($mu_row->getRealPath())->resize(800, 800, function ($constraint) {
                    });
                    $img_path = public_path('/uploads/products/');
                    $thumb_path = public_path('/uploads/products/thumb/');
                    //filename to store
                    $psi_img_name =  'pro_sub_'.$time.'.'.$ext;  
                    $mu_row->move($img_path, $psi_img_name);
                    $thumb->save($thumb_path.'/'.$psi_img_name); 

                    $psi_data = new ProductSubImgs();   
                    $psi_data->psi_pro_id = isset($pro_data->id)?$pro_data->id:''; 

                    $psi_data->psi_img = isset($psi_img_name)?$psi_img_name:'';  
                    $psi_data->created_by =  Auth::user()->id;     
                    $psi_data->updated_by =  Auth::user()->id;     
                    $psi_data->deleted_by =  0;     
                    $psi_data->created_at = now();
                    $psi_data->save();

                }
            }
        }
        
        return redirect()->route('products.index')->with('create', ' Data successfully added !');
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
 
        $is_act_menu = 'prod'; 
        $is_act_s_menu = 'prod'; 
        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        
        $pro_data = Products::select("*")->where("pro_id", "=", base64_decode($id))->first();  
        $psi_list = ProductSubImgs::select("*")->where("psi_pro_id", "=", base64_decode($id))->get();  
        $pc_list = ProductCategorys::where('pc_is_active','=','1')->get();
        
        return view("products.edit")->with('s_data',$s_data)->with('is_act_menu',$is_act_menu)->with('is_act_s_menu',$is_act_s_menu)->with('menus_list',$menus_list)->with('pro_data',$pro_data)->with('psi_list',$psi_list)->with('pc_list',$pc_list);
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
            // 'pro_pc_id' => 'required|string',
            'pro_slug' => 'required|string',
            'pro_metta_title' => 'required|string',
            'pro_metta_desc' => 'required|string',
            'pro_metta_keywords' => 'required|string',
            'pro_title' => 'required|string',
            'pro_price' => 'required|string', 
            'pro_s_price' => 'required|string', 
            'pro_desc' => 'required|string', 
            'pro_features' => 'required|string', 
            
        ]);
        if($validatedData){
            $data= $request->all(); 
            $pro_img_name = ''; 
            $time = time();
            
            if($file = $request->hasFile('pro_img_1')) { 
                $file = $request->file('pro_img_1');
                $ext = $file->getClientOriginalExtension();
                
                $thumb = Image::make($file->getRealPath())->resize(800, 800, function ($constraint) {
                });
                $img_path = public_path('/uploads/images/');
                $thumb_path = public_path('/uploads/images/thumb/');
                //filename to store
                $pro_img_name =  'pro_'.$time.'.'.$ext;

    
                $file->move($img_path, $pro_img_name);
                $thumb->save($thumb_path.'/'.$pro_img_name);
                $img_path = '/uploads/images/'. $pro_img_name; 
            }
 


            $update_data =array(
                'pro_pc_id' => isset($data['pro_pc_id'])?$data['pro_pc_id']:'',    
                'pro_slug' => isset($data['pro_slug'])?$data['pro_slug']:'',    
                'pro_metta_title' => isset($data['pro_metta_title'])?$data['pro_metta_title']:'',    
                'pro_metta_desc' => isset($data['pro_metta_desc'])?$data['pro_metta_desc']:'',    
                'pro_metta_keywords' => isset($data['pro_metta_keywords'])?$data['pro_metta_keywords']:'',    
                'pro_title' => isset($data['pro_title'])?$data['pro_title']:'',    
                'pro_price' => isset($data['pro_price'])?$data['pro_price']:'',    
                'pro_s_price' => isset($data['pro_s_price'])?$data['pro_s_price']:'',    
                'pro_desc' => isset($data['pro_desc'])?$data['pro_desc']:'',    
                'pro_features' => isset($data['pro_features'])?$data['pro_features']:'',   
                'updated_by' => Auth::user()->id, 
                'updated_at' => now(), 
            );

            if($pro_img_name!=''){
                $update_data['pro_img'] = $pro_img_name; 
            }

            Products::where("pro_id", "=",$data['pro_id'])->update($update_data);

            $update_psi_de =array(
                'psi_is_active' => '0',   
            ); 
            ProductSubImgs::where("psi_pro_id", "=",$data['pro_id'])->update($update_psi_de); // soft delete for sub images in table


            if($data['pro_id']!=''){
                if($file = $request->hasFile('mu_img_1')) { 
                    $file = $request->file('mu_img_1');
                    foreach($file as $mu_row){
                        $ext = $mu_row->getClientOriginalExtension();
                        
                        $thumb = Image::make($mu_row->getRealPath())->resize(800, 800, function ($constraint) {
                        });
                        $img_path = public_path('/uploads/products/');
                        $thumb_path = public_path('/uploads/products/thumb/');
                        //filename to store
                        $psi_img_name =  'pro_sub_'.$time.'.'.$ext;  
                        $mu_row->move($img_path, $psi_img_name);
                        $thumb->save($thumb_path.'/'.$psi_img_name); 
    
                        $psi_data = new ProductSubImgs();   
                        $psi_data->psi_pro_id = $data['pro_id']; 
    
                        $psi_data->psi_img = isset($psi_img_name)?$psi_img_name:'';  
                        $psi_data->created_by =  Auth::user()->id;     
                        $psi_data->updated_by =  Auth::user()->id;     
                        $psi_data->deleted_by =  0;     
                        $psi_data->created_at = now();
                        $psi_data->save();
    
                    }
                }
                // var_dump($data['psi_id']);return;
                foreach($data['psi_id'] as $psi_id_row){
                    $update_psi =array(
                        'psi_is_active' => '1',   
                        'updated_by' => Auth::user()->id, 
                        'updated_at' => now(), 
                    ); 
                    ProductSubImgs::where("psi_id", "=",$psi_id_row)->update($update_psi); // soft delete for sub images in table
            
            
                }
                
            }
        
            
            return redirect()->route('products.index')->with('create', ' Data successfully updated !');

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
            'pro_is_active' => '0',
            'deleted_at' => now(),
            'deleted_by' => auth()->user()->id,
        );
        Products::where("pro_id", "=",$this_id)->update($update_data);
          
        
        return redirect()->route('products.index')->with('create', ' Data successfully Deleted !');
      
    }
    
    
  
}

