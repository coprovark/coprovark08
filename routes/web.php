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
    return view('page.form_login');
});



Route::post('/page','PageController@show');
Route::post('/page9','PageController@show_select');