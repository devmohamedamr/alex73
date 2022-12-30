<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class user extends Controller
{
    public function register(){
        return view("user.register");
    }

    public function registerRequest(Request $request){

        $request->validate([
            "email"=>"unique:user,email"
        ]);

        DB::table('user')->insert([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=> bcrypt($request->password)
        ]);

        return redirect("login");
    }

    public function login(){
        return view("user.login");
    }

    public function loginRequest(Request $request){

        if(Auth::attempt($request->except("_token"))){
            // success
            return redirect("/category");
        }

        return redirect("/login");
        // error
    }

    public function logout(){
        Auth::logout();
        return redirect("login");
    }
}
