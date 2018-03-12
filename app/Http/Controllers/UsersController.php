<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
     
    public function list_user()
    {
        $users = DB::table('users')->select('*')->get();
        return view('/page.list_user', ['data_list'=>$users]);
    }
}