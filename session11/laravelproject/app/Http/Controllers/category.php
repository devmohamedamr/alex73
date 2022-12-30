<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category as CategoryModel;
class category extends Controller
{

    // show category list
    public function index(){
        $categories = CategoryModel::all();
    //    $categories  =  DB::table("category")->get();
        return view('category.index',compact('categories'));
    }

    // show create form
    public function create(){
        return view('category.create');
    }

    // request to category table
    public function store(Request $request){

        $request->validate([
            "title"=> "required|min:2"
        ]);

        DB::table("category")->insert([
            "title"=> $request->title
        ]);

        return redirect("category");
    }

    public function delete($id){
        DB::table("category")->delete($id);
        return redirect("category");
    }

    // single category to edit
    public function edit($id){
      $category =   DB::table("category")->find($id);
        return view("category.edit",compact("category"));
    }

    // request to update category
    public function update(Request $request){
        $request->validate([
            "title"=> "required|min:2"
        ]);

        DB::table("category")->where("id",$request->id)->update([
            "title"=>$request->title
        ]);

        return redirect("category");

    }
}
