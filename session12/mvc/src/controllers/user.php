<?php

namespace Amit73\Mvc\controllers;

use Amit73\Mvc\models\category;

class user extends controller{

    public function index(){
        $category = new category;
        $categories =  $category->getAllCategory();

        return view("index",["categories"=>$categories]);
    }

    public function create(){
        echo "create user";
    }

    public function delete(){
        echo "delete new user";
    }
}