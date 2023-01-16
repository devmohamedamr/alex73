<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\categorystore;
use App\Models\category;
use Illuminate\Http\Request;

class categoryApi extends Controller
{
    public function index()
    {
        $categories = category::all();
        return response()->json([
            "status"=>200,
            "data"=>$categories
        ]);
    }

    public function show($id)
    {
       $category =  category::find($id);
       if(is_object($category)){
        return response()->json([
            "status"=>200,
            "data"=>$category
          ]);
       }
       return response()->json([
        "status"=>404,
        "data"=>[]
      ]);
    }

    public function store(categorystore $request)
    {
        $res =  category::create($request->all());
        if($res){
            return response()->json([
                "status"=>201,
                "data"=>[],
                "msg"=>"category created"
              ]);
        }
    }

    public function update(Request $request)
    {
        $data =  category::find($request->id);
        $data->name = $request->name;
        $data->update();
        return response()->json([
            "status"=>201,
            "data"=>[],
            "msg"=>"category update"
          ]);
    }

    public function delete(Request $request)
    {
        $data =  category::destroy($request->id);

        return response()->json([
            "status"=>201,
            "data"=>[],
            "msg"=>"category deleted"
          ]);
    }

}
