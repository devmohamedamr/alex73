<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userApi extends Controller
{

    public function register(Request $request){
        User::create($request->all());
        return response()->json([
            "status"=>201,
            "data"=>[],
            "msg"=>"user created"
        ]);
    }

    public function login(Request $request)
    {
        if(Auth::attempt($request->only(["email","password"]))){
            $token =  auth()->user()->createToken('auth token')->accessToken;

            return response()->json([
                "data"=>[],
                "token"=>$token
            ]);
        }
    }
}
