<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\User; 
use App\Menu; 
use App\Settings;
class DashboradController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $is_act_menu = 'da'; 
        $is_act_s_menu = ''; 
        $user_type = auth()->user()->user_type; 
        $user_count = User::where('user_type', '=','user')->where('is_active', '=', 1)->count(); 
        $menus_list = Menu::where('is_active', '=', 1)->get(); 
        $s_data = Settings::select("*")->where("s_id", "=", '1')->first(); 

        if ($user_type) {
            
            return view('dashborad.admin_dashborad')
            ->with('is_act_menu',$is_act_menu)
            ->with('is_act_s_menu',$is_act_s_menu)
            ->with('menus_list',$menus_list)
            ->with('s_data',$s_data)
            ->with('user_count',$user_count);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
