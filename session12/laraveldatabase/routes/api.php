<?php

use App\Http\Controllers\api\categoryApi;
use App\Http\Controllers\api\userApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(["middleware"=>"auth:api"],function () {
    Route::get("category",[categoryApi::class,"index"]);
    Route::get("category/{id}",[categoryApi::class,"show"]);
    Route::post("category",[categoryApi::class,"store"]);
    Route::put("category/{id}",[categoryApi::class,"update"]);
    Route::delete("category/{id}",[categoryApi::class,"delete"]);
});



Route::post("login",[userApi::class,"login"]);
Route::post("register",[userApi::class,"register"]);
