<?php

namespace App\Logic;

use App\Models\category;

class categoryLogic{
    public function index(){
       return category::all();
    }
}
