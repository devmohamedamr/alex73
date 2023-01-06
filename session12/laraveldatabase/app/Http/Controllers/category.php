<?php

namespace App\Http\Controllers;

use App\Logic\categoryLogic;
use App\Models\category as ModelsCategory;
use Illuminate\Http\Request;

class category extends Controller
{
    public function index(){
        $categoryLogic = new categoryLogic;
        $categories= $categoryLogic->index();
        return view('allcategory',compact('categories'));
    }
}
