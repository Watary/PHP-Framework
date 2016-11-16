<?php

/**
 * Created by PhpStorm.
 * User: pedorenko
 * Date: 16.11.2016
 * Time: 12:38
 */

class Router
{

    private static $routes = [];
    private static $route = [];

    function __construct($url){
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

    private function rules(){
        foreach (self::$routes as $value){
            if($value['controller'][0] == self::$route['controller'] && $value['action'][0] == self::$route['action']){
                self::$route['controller'] = $value['controller'][1];
                self::$route['action'] = $value['action'][1];
                return;
            }
        }

        if(self::$route['action'] == ''){
            self::$route['action'] = 'index';
        }
    }

    public function autoLoad($rules){
        self::addRules($rules);
        self::rules();
    }

    public function addRules($rules){
        foreach ($rules as $value){
            self::$routes[] = ['controller' =>  $value['controller'], 'action' => $value['action']];
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