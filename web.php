<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\saleh;

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

 

//  Route::get('/Home' , function(){
//    //  return view('Home');
//  })
//  ->name('Home');


//  Route::get('/about' , function(){
//     return view('about');
//  })
//  ->name('about');

//////////////////////////////////////////

Route::get('/', [Usercontroller::class,'show']);

Route::get('/',[saleh::class,'show']);
Route::get('/newstore',[saleh::class,'newstore']);


Route::post('/store',[Usercontroller::class,'store'] );





