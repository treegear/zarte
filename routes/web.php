<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return redirect()->route('home');  }); 


// site

Route::any('/home','site_ctrl@index')->name('home');  
Route::any('/about','site_ctrl@index')->name('about');  
Route::any('/products','site_ctrl@products')->name('products');  
Route::get('/product-details/{id}','site_ctrl@product_details')->name('product-details'); 

Route::any('/services','site_ctrl@index')->name('services');  
Route::any('/contacts','site_ctrl@index')->name('contacts');  



Route::get('/login', function () { return redirect()->route('login');  });  
 
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
     //DashboradController
     Route::get('dashboard','DashboradController@index')->name('dashborad');    
    Route::get('logout', 'HomeController@logout')->name('logout')->middleware('auth');
    
    
      
     //menus
      
    Route::get('/menusDetails/{id}','MenusController@edit')->name('menus.edit')->middleware(['role:super_admin,admin']);
    Route::put('/metta-data-update','MenusController@update')->name('metta.update')->middleware(['role:super_admin,admin']); 
    Route::put('/page-data-update','MenusController@p_update')->name('page.update')->middleware(['role:super_admin,admin']); 
    Route::put('/contacts-data-update','MenusController@c_update')->name('contacts.update')->middleware(['role:super_admin,admin']); 


    // companies , members , services
    Route::get('/companies-list','CommonController@index')->name('companies.index')->middleware(['role:super_admin,admin']); 
    Route::get('/members-list','CommonController@index')->name('members.index')->middleware(['role:super_admin,admin']); 
    Route::get('/services-list','CommonController@index')->name('services.index')->middleware(['role:super_admin,admin']); 

    Route::get('/companies-add/{id}','CommonController@create')->name('companies.create')->middleware(['role:super_admin,admin']);
    Route::get('/members-add/{id}','CommonController@create')->name('members.create')->middleware(['role:super_admin,admin']);
    Route::get('/services-add/{id}','CommonController@create')->name('services.create')->middleware(['role:super_admin,admin']);

    Route::put('/companies-store','CommonController@store')->name('companies.store')->middleware(['role:super_admin,admin']);
    Route::put('/members-store','CommonController@store')->name('members.store')->middleware(['role:super_admin,admin']);
    Route::put('/services-store','CommonController@store')->name('services.store')->middleware(['role:super_admin,admin']);


    Route::get('/companies-edit/{id}/{type}','CommonController@edit')->name('companies.edit')->middleware(['role:super_admin,admin']);
    Route::get('/members-edit/{id}/{type}','CommonController@edit')->name('members.edit')->middleware(['role:super_admin,admin']);
    Route::get('/services-edit/{id}/{type}','CommonController@edit')->name('services.edit')->middleware(['role:super_admin,admin']);


    Route::put('/companies-update','CommonController@update')->name('companies.update')->middleware(['role:super_admin,admin']);
    Route::put('/members-update','CommonController@update')->name('members.update')->middleware(['role:super_admin,admin']);
    Route::put('/services-update','CommonController@update')->name('services.update')->middleware(['role:super_admin,admin']);



    Route::get('/companies-delete/{id}/{type}','CommonController@destroy')->name('companies.delete')->middleware('role:admin');
    Route::get('/members-delete/{id}/{type}','CommonController@destroy')->name('members.delete')->middleware('role:admin');
    Route::get('/services-delete/{id}/{type}','CommonController@destroy')->name('services.delete')->middleware('role:admin');

    

    // slider , partners  
    Route::get('/slider','slider_partner_ctrl@index')->name('slider.index')->middleware(['role:super_admin,admin']); 
    Route::get('/partners','slider_partner_ctrl@index')->name('partners.index')->middleware(['role:super_admin,admin']); 
    
    
    Route::get('/slider-add/{id}','slider_partner_ctrl@create')->name('slider.create')->middleware(['role:super_admin,admin']);
    Route::get('/partners-add/{id}','slider_partner_ctrl@create')->name('partners.create')->middleware(['role:super_admin,admin']);
    
    Route::put('/slider-store','slider_partner_ctrl@store')->name('slider.store')->middleware(['role:super_admin,admin']);
    Route::put('/partners-store','slider_partner_ctrl@store')->name('partners.store')->middleware(['role:super_admin,admin']);
   
    Route::get('/slider-edit/{id}/{type}','slider_partner_ctrl@edit')->name('slider.edit')->middleware(['role:super_admin,admin']);
    Route::get('/partners-edit/{id}/{type}','slider_partner_ctrl@edit')->name('partners.edit')->middleware(['role:super_admin,admin']); 


    Route::put('/slider-update','slider_partner_ctrl@update')->name('slider.update')->middleware(['role:super_admin,admin']);
    Route::put('/partners-update','slider_partner_ctrl@update')->name('partners.update')->middleware(['role:super_admin,admin']); 


    Route::get('/slider-delete/{id}/{type}','slider_partner_ctrl@destroy')->name('slider.delete')->middleware('role:admin');
    Route::get('/partners-delete/{id}/{type}','slider_partner_ctrl@destroy')->name('partners.delete')->middleware('role:admin');



    Route::get('/settings-edit','SettingsCtrl@edit')->name('settings.edit')->middleware(['role:super_admin,admin']); 
    Route::put('/settings-update','SettingsCtrl@update')->name('settings.update')->middleware(['role:super_admin,admin']);
     

      

    Route::get('/testimonial-index','Testimonial_ctrl@index')->name('testimonial.index')->middleware(['role:super_admin,admin']);
    Route::get('/testimonial-add','Testimonial_ctrl@create')->name('testimonial.create')->middleware(['role:super_admin,admin']);
    Route::put('/testimonial-store','Testimonial_ctrl@store')->name('testimonial.store')->middleware(['role:super_admin,admin']);
    Route::get('/testimonial-edit/{id}','Testimonial_ctrl@edit')->name('testimonial.edit')->middleware(['role:super_admin,admin']); 
    Route::put('/testimonial-update','Testimonial_ctrl@update')->name('testimonial.update')->middleware(['role:super_admin,admin']);
    Route::get('/testimonial-delete/{id}/','Testimonial_ctrl@destroy')->name('testimonial.delete')->middleware('role:admin');

    Route::get('/products-index','Products_ctrl@index')->name('products.index')->middleware(['role:super_admin,admin']);
    Route::get('/products-add','Products_ctrl@create')->name('products.create')->middleware(['role:super_admin,admin']);
    Route::put('/products-store','Products_ctrl@store')->name('products.store')->middleware(['role:super_admin,admin']);
    Route::get('/products-edit/{id}','Products_ctrl@edit')->name('products.edit')->middleware(['role:super_admin,admin']); 
    Route::put('/products-update','Products_ctrl@update')->name('products.update')->middleware(['role:super_admin,admin']);
    Route::get('/products-delete/{id}','Products_ctrl@destroy')->name('products.delete')->middleware('role:admin');


    
    Route::get('/productCategory-index','ProductsCate_ctrl@index')->name('productCategory.index')->middleware(['role:super_admin,admin']);
    Route::get('/productCategory-add','ProductsCate_ctrl@create')->name('productCategory.create')->middleware(['role:super_admin,admin']);
    Route::put('/productCategory-store','ProductsCate_ctrl@store')->name('productCategory.store')->middleware(['role:super_admin,admin']);
    Route::get('/productCategory-edit/{id}','ProductsCate_ctrl@edit')->name('productCategory.edit')->middleware(['role:super_admin,admin']); 
    Route::put('/productCategory-update','ProductsCate_ctrl@update')->name('productCategory.update')->middleware(['role:super_admin,admin']);
    Route::get('/productCategory-delete/{id}','ProductsCate_ctrl@destroy')->name('productCategory.delete')->middleware('role:admin');



//Notifications Controller   

 });


Route::any('/','site_ctrl@index'); 



 