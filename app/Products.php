<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
     
    public static function getAll_products(){
        return Products::select('*')->where('pro_is_active','=',1)->get();
    }
    
    public static function getAllCategory(){
        return ProductCategorys::select('*')->where('pc_is_active','=',1)->get();
    }
    
    public function getCategory()
    {
        return $this->hasOne('App\ProductCategorys', 'pc_id', 'pc_slug', 'pc_name');
    }

		

}
