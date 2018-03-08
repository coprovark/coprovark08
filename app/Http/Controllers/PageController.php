<?php

namespace App\Http\Controllers;

use App\page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function show(Request $request)
    {

        $txtname = $request->input('name');
        $txtcheckbox = $request->input('checkbox');
        $txtradio = $request->input('radio');
        $txthidden = $request->input('hidden');


        $array = [
            "NAME" =>  $txtname,
            "A"    =>  $txtcheckbox,
            "ID"   =>  $txtradio,
            "GEN"  =>  $txthidden
           
        ];

    // echo 'ชื่อ :  '. $txtname.'<br>'.'ราคา :  '.$txtcheckbox.'<br>'.'เพศ :  '.$txtradio.'<br>'.'รหัส :  '.$txthidden;
        return view('page.page1',$array) ;
    }
}