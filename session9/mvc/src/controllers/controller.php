<?php

namespace Amit73\Mvc\controllers;
class controller{
    public function __call($name, $arguments)
    {
        echo "this method :".$name." not found";
    }
}