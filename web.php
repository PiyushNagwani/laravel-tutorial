<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\httpclientcontroller;
use App\Http\Controllers\insertcontroller;
use App\Http\Controllers\sessioncontroller;
use App\Http\Controllers\flashcontroller;
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
// route::POST('login',[usercontroller::class,"index"]);
// route::view("login",'login');
// route::view("noaccess","noaccess");
// route::view("access","access");

// route::group(['Middleware' =>['web']],function()
// {
//     route::view('accessgrp','accessgrp');
// });
// route::view('routeaccess','routeaccess')->middleware('protectedpage');
// route::view('routenoaccess','routenoaccess')->middleware('protectedpage');
// route::view('routehome','routehome')->middleware('protectedpage');

// //route::get('index',[datacontroller::class,"index"]);
// route::get('getdata',[clientcontroller::class,'getdata']);

// route::put('request',[requestcontroller::class,'testrequest']);
// route::view('blade','request');

// route::get('get',[gitcontroller::class,'index']);

// route::get('user',[httpclientcontroller::class,'index']); 

// route::get('add',[insertcontroller::class,'add']);
// route::view('add','insert');


route::view('profile','sessionprofile'); 
route::get('logout',function(){
    if(session()->has('username'))
    {
        session()->pull('username',null);
    }
    return redirect('sessionlogin');
});
route::get('sessionlogin',function()
{
    if(session()->has('username'))
    {
        return redirect('profile');
    }
    return view("sessionlogin");
});
 route::POST('index',[sessioncontroller::class,'index']);

 route::view('flash','flashsession');
 route::post('store',[flashcontroller::class,'store']);