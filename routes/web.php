<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/page1', function () {
    return view('page1');
});


Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/page1', function () {
    $array = [
        "NAME" =>  "", 
        "A" =>      "",
        "ID"   =>  "",
        "GEN"  => "",
        "B" => ""
    ];
    return view('page.page1',$array);
});

Route::get('/page2', function () {
    return view('page.page2');
});

Route::get('/page3', function () {
    return view('page.page3');
});
Route::get('/page4', function () {
    return view('page.page4');
});

Route::get('/page10/{id}', function ($id) {
    $array = [
        "ID" => $id
    ];
    return view('page.page10',$array);
});

Route::get('/form_register', function () {
    return view('page.form_register');
});



Route::get('/form_login', function () {
    $data=[
        'users'=>[]
    ];
    return view('page.form_login',$data);
});;
Route::post('/form_login','PageController@Login');






Route::get('/form_check_login', function () {
    $data=[
        'users'=>[]
    ];
    return view('page.form_check_login',$data);
});
Route::post('/form_check_login','PageController@form_check_login');




Route::post('/page','PageController@show');

Route::post('/page9','PageController@show_select');



Route::get('/form_login2', function () {
    $data = ['username' => '',
              'name' =>''
            ];

    return view('page.form_login',$data);
});
Route::post('/form_login2','PageController@form_login2');//จะทำงานก็่อเมื่อเรากดปุ่ม submit


// Route::get('/list_users', function () {
//     return view('/page.list_user',);
// });
Route ::get('/list_user','UsersController@list_user');


//---------------------------ลบ-------------------------------------
Route::get('delete_user/{id}', function ($id) {
    return 'User = '.$id;
});
Route ::get('delete_user/{id}','UsersController@delete_users');
//--------------------------------------------------------------------

//-------------------------เพิ่ม-------------------------------------
Route::post('/form_register_save','UsersController@form_register_save');
//--------------------------------------------------------------------

//--------------------------------------------------------------------
Route::post('/list_users_find','UsersController@list_users_find');
//--------------------------------------------------------------------