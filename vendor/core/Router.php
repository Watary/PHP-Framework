<?php

/**
 * Created by PhpStorm.
 * User: pedorenko
 * Date: 16.11.2016
 * Time: 12:38
 */

class Router
{

    protected static $routes = [];
    protected static $route = [];

    public function __construct($url){
        $request = explode('/', $url);

        if(isset($request[1])){
            self::$route['controller'] = $request[1];
            unset($request[1]);
        }

        if(isset($request[2])){
            self::$route['action'] = $request[2];
            unset($request[2]);
        }

        foreach ($request as $value){
            if($value) self::$route['params'][] = $value;
        }
    }

    public function getController(){
        return self::$route['controller'];
    }

    public function getAction(){
        return self::$route['action'];
    }

    public function getParams(){
        return self::$route['params'];
    }

    public function getRoute(){
        return self::$route;
    }
}