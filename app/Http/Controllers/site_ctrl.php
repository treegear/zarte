<?php

namespace App\Http\Controllers;


use App\Menu;
use App\Settings;
use App\MenusDetails;
use App\SupportersAndServices;
use App\PartnersAndSliders;
use App\Contacts;
use App\Testimonials;
use App\Products;
use App\ProductSubImgs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
class site_ctrl extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $url_se = request()->segment(1);
        if($url_se==''){
            $url_se = 'home'; 
        }

        $menus_list = Menu::where('is_active', '=', 1)->get();    
        $m_data = Menu::where('m_slug', '=', $url_se)->where('is_active', '=', 1)->first();  
        // var_dump($m_data);return;

        if(isset($m_data['m_id'])){ 

            $is_act_menu = $url_se;  
            $m_details = MenusDetails::where('md_m_id','=',$m_data['m_id'])->first();
            $sliders = PartnersAndSliders::where('ps_type', '=', 'slider')->where('ps_is_active','=',1)->get();
            $partners = PartnersAndSliders::where('ps_type', '=', 'partners')->where('ps_is_active','=',1)->get();
            $contact_data = Contacts::where('is_active', '=', 1)->first();  
            $com_list = SupportersAndServices::where('ss_type','=','companies')->get();
            $ser_list = SupportersAndServices::where('ss_type','=','services')->get();
            $mem_list = SupportersAndServices::where('ss_type','=','members')->get();
            $testi_list = Testimonials::where('te_is_active','=','1')->get();
            $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 
            $prod_list = Products::select('products.*','product_categorys.pc_name',)->leftJoin('product_categorys', 'products.pro_pc_id', '=', 'product_categorys.pc_id')->where('pro_is_active','=','1')->orderBy('created_by', 'desc')->get();
            $h_page = MenusDetails::where('md_m_id','=','1')->first();
                
            return view('f_site.'.$url_se.'')->with('menus_list',$menus_list)->with('m_data',$m_data)->with('is_act_menu',$is_act_menu)->with('m_details',$m_details)->with('sliders',$sliders)->with('partners',$partners)->with('contact_data',$contact_data)->with('com_list',$com_list)->with('ser_list',$ser_list)->with('mem_list',$mem_list)->with('testi_list',$testi_list)->with('s_data',$s_data)->with('prod_list',$prod_list)->with('h_page',$h_page);

        }else{
            return route('login');
        }
            
    }
    public function products(){
        $url_se = request()->segment(1);
        if($url_se==''){
            $url_se = 'home'; 
        }

        $menus_list = Menu::where('is_active', '=', 1)->get();    
        $m_data = Menu::where('m_slug', '=', $url_se)->where('is_active', '=', 1)->first();  
        // var_dump($m_data);return;

        if(isset($m_data['m_id'])){ 

            $is_act_menu = $url_se;  
            $m_details = MenusDetails::where('md_m_id','=',$m_data['m_id'])->first();
            $sliders = PartnersAndSliders::where('ps_type', '=', 'slider')->where('ps_is_active','=',1)->get();
            $partners = PartnersAndSliders::where('ps_type', '=', 'partners')->where('ps_is_active','=',1)->get();
            $contact_data = Contacts::where('is_active', '=', 1)->first();  
            $com_list = SupportersAndServices::where('ss_type','=','companies')->get();
            $ser_list = SupportersAndServices::where('ss_type','=','services')->get();
            $mem_list = SupportersAndServices::where('ss_type','=','members')->get();
            $testi_list = Testimonials::where('te_is_active','=','1')->get();
            $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 
            
            $prod_list = Products::select('products.*','product_categorys.pc_name',)->leftJoin('product_categorys', 'products.pro_pc_id', '=', 'product_categorys.pc_id')->where('pro_is_active','=','1')->orderBy('created_by', 'desc')->paginate(
                $perPage = 9, $columns = ['*'], $pageName = 'users'
            ); 

            $prod_count = Products::where('pro_is_active','=','1')->get()->count();
            $per_p  = 9;

            return view('f_site.'.$url_se.'')->with('menus_list',$menus_list)->with('m_data',$m_data)->with('is_act_menu',$is_act_menu)->with('m_details',$m_details)->with('sliders',$sliders)->with('partners',$partners)->with('contact_data',$contact_data)->with('com_list',$com_list)->with('ser_list',$ser_list)->with('mem_list',$mem_list)->with('testi_list',$testi_list)->with('s_data',$s_data)->with('prod_list',$prod_list)->with('prod_count',$prod_count)->with('per_p',$per_p);

        }else{
            return route('login');
        }
            
    }
    public function product_details($id){
        $url_se = 'products';  
        $menus_list = Menu::where('is_active', '=', 1)->get();    
        $m_data = Menu::where('m_slug', '=', $url_se)->where('is_active', '=', 1)->first();  
        // var_dump($m_data);return;

        if(isset($m_data['m_id'])){ 

            $is_act_menu = $url_se;  
            $m_details = MenusDetails::where('md_m_id','=',$m_data['m_id'])->first();
            $partners = PartnersAndSliders::where('ps_type', '=', 'partners')->where('ps_is_active','=',1)->get();
            
            $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 
            
            $pro_data = Products::select("*")->where("pro_slug", "=", $id)->first();  
            $psi_list = ProductSubImgs::select("*")->where("psi_pro_id", "=", $pro_data['pro_id'])->get();


            return view('f_site.product_details')->with('menus_list',$menus_list)->with('m_data',$m_data)->with('is_act_menu',$is_act_menu)->with('m_details',$m_details)->with('partners',$partners)->with('s_data',$s_data)->with('pro_data',$pro_data)->with('psi_list',$psi_list);

        }else{
            return route('login');
        }
            
    }

     
     

  
    
  
}

