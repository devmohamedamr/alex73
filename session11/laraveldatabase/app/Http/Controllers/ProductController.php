<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
class ProductController extends Controller
{
    public function index()
    {
        // $product =  DB::table('product')->get();
        // $product = product::all();
        // dd($product);
    }
}
