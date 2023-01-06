<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
class ProductController extends Controller
{
    public function index()
    {
        category::create(['name'=>'test3']);
        // $category = new category;
        // $category->name = "test";
        // $category->save();
        // $category =  category::find(2);
        // $product =  DB::table('product')->get();
        // $product = product::find(1)->category;
        // dd($category->name);
    }
}
