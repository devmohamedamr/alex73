<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user extends Controller
{
    public function index(){
        $data =  DB::table("category")->get();

       return view('index',['data'=>$data]);
        // echo "hi";
    }

    public function store(Request $request){
        DB::table("category")->insert([
            "title"=>$request->category
        ]);

        return redirect("/");
    }
}
