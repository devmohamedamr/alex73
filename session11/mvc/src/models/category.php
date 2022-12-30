<?php

namespace Amit73\Mvc\models;

use Amit73\Mvc\core\DB;
class category{
    public function getAllCategory(){
       return  DB::table("category")->select()->all();
    }
}