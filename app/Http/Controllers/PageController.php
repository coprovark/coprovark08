<?php

namespace App\Http\Controllers;

use App\page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function show(Request $request)
    {

        $txtname = $request->input('a');
        $txtcheckbox = $request->input('checkbox');
        $txtpassword = $request->input('password');
        $txtradio = $request->input('radio');
        $txthidden = $request->input('hidden');


        $array = [
            "NAME" =>  $txtname,
            "A"    =>  $txtcheckbox,
            "ID"   =>  $txtpassword,
            "GEN"  =>  $txthidden,
            "B"  => $txtradio
        
           
        ];

    // echo 'ชื่อ :  '. $txtname.'<br>'.'ราคา :  '.$txtcheckbox.'<br>'.'เพศ :  '.$txtradio.'<br>'.'รหัส :  '.$txthidden;
        return view('page.page1',$array) ;
    }
    public function show_select(Request $res){
        return view('page.page9',$res);
    }

    public function Login(Request $request)
    {
        $txtUser = $request->input('user');
        $txtPassword = $request->input('password');
        $data = ["USER"=>$txtUser,"PASSWORD"=>$txtPassword];
        return view('page.form_login',$data);
    }
}

    
   

    
