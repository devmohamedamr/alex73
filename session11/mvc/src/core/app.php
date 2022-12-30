<?php

namespace Amit73\Mvc\core;

class app{
    
    private $controller = "user";
    
    
    private $method = "index";


    private function url(){
        return  $_SERVER['QUERY_STRING'];
    }

    public function handle(){
    
        if(array_key_exists($this->url(),route::$routes)){
            $this->controller = route::$routes[$this->url()][0];
            $this->method = route::$routes[$this->url()][1];
        }
  
        $controller = "Amit73\Mvc\controllers\\".$this->controller;
        call_user_func_array([new $controller,$this->method],[]);
    }
}