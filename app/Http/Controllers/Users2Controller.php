<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Users2Controller extends Controller
{
    //----------------แสดงตาราง2----------------------
    public function list_user2()
    {
        $find ='';

        $users = DB::table('coprovark_08')->select('*')->get();
        return view('/page.list_user2', [
            'data_list'=>$users,
            'find'     =>$find
            ]);
    }
    //--------------------------------------------------
    //----------------ค้นหาข้อมูล2-------------------------
    public function list_users_find2(Request $req)
    {
        $find = $req->find;

        $users = DB::table('coprovark_08')
                    ->select('*')
                    ->where('id','=',$find)
                    ->get();
        return view('/page.list_user2', [
            'data_list'=>$users,
            'find'     =>$find
            ]);
    }
    //--------------------------------------------------
    //---------------------ลบข้อมูล2---------------------
    public function delete_users2($id)
    {
        DB::table('coprovark_08')->where('id', '=', $id)->delete();
        return redirect('list_user2');
    }
    //-------------------------------------------------

    //--------------------เพิ่มข้อมูล2----------------------
    public function form_register_save2(Request $req){

        $status = DB::table('coprovark_08')->insert(
          [
            'sid'      => $req->SID,
            'titleName'=> $req->TITLENAME,
            'fullName'=> $req->FULLNAME,
            'gender'  => $req->GENDER,
            'birthDay'=> $req->BIRTHDAY,
            'facultyID'=> $req->FACULTYID,
            'majorID'  => $req->MAJORID, 
            'address'=> $req->ADDRESS,
            'mobile' => $req->MOBILE,
            'food1'  => $req->FOOD1,
            'food2'  => $req->FOOD2, 
            'food3'  => $req->FOOD3,
            'food4'  => $req->FOOD4,
            'username'  => $req->USERNAME,
            'password'  => $req->PASSWORD
          ]
        );
        if($status){
           return redirect('list_user2');
        }else{
           return "เกิดข้อผิดพลาด";
        }
       
      }
    //---------------------------------------------------
//-------------------------------------------------------
public function form_login2(Request $res){

    $users = DB::table('coprovark_08')->where([
        ['username','=',$res['username']],
        ['password','=',$res['password']],
        ])->get();

        $name='';
        foreach($users as $value ){
            $name = $value->password;
        }
        $res['name']=$name;





return view('page.form_login',$res);
}
//-------------------------------------------------------














}