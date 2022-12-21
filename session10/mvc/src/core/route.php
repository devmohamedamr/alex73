<?php

namespace Amit73\Mvc\core;

class route{
    public static $routes = [];

    public static function get($url,$action){
        self::$routes[$url] = $action;
    }

    public static function post($url,$action){
        self::$routes[$url] = $action;
    }
}