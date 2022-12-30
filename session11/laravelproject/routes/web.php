<?php

use App\Http\Controllers\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
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

Route::get('/',function(){
    echo "hi";
});


Route::get("register",[user::class,"register"])->middleware("guest");
Route::post("register",[user::class,"registerRequest"])->middleware("guest");

Route::get("login",[user::class,"login"])->name("login")->middleware("guest");
Route::post("login",[user::class,"loginRequest"])->middleware("guest");
Route::get("logout",[user::class,"logout"]);

// Category routes

Route::group(['prefix'=>'category','middleware'=>"auth"],function(){
    Route::get('/',[category::class,"index"]);
    Route::get('/create',[category::class,"create"])->middleware("admin");
    Route::post('/store',[category::class,"store"])->middleware("admin");
    Route::get('/delete/{id}',[category::class,"delete"])->middleware("admin");
    Route::get('/edit/{id}',[category::class,"edit"])->middleware("admin");
    Route::post('/update',[category::class,"update"])->middleware("admin");
});

