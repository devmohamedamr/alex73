<?php

namespace Amit73\Mvc\controllers;


class user extends controller{

    public function index(){
        return view("index");
    }

    public function create(){
        echo "create user";
    }

    public function delete(){
        echo "delete new user";
    }
}