<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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

    public function  Login(Request $res1){
        $users = DB::select('select * from users where username = ? and password =? ',
         [$res1['username'],$res1['password']]
        );  
       return view('page.form_login',['users'=>$users]);
    }

    public function  form_check_login(Request $res){
        $users = DB::select('select * from users where username = ? and password =? ',
         [$res['username'],$res['password']]
        );  
       return view('page.form_check_login',['users'=>$users]);
    }

    // form_login2
//    public function form_login2(Request $res){

//          $users = DB::table('users')->where([
//              ['username','=',$res['username']],
//              ['password','=',$res['password']],
//              ])->get();

//              $name='';
//              foreach($users as $value ){
//                  $name = $value->id;
//              }
//              $res['name']=$name;

// //----------------------------------------------View--------------------------------------------------



//     return view('page.form_login',$res);
//     }
  
}

    
   

    
