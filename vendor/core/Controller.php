<?php

/**
 * Created by PhpStorm.
 * User: pedorenko
 * Date: 18.11.2016
 * Time: 13:18
 */

require_once 'Router.php';

class Controller{

    private static $controller;

    function __construct($controller){
        self::$controller = $controller;
    }

    function render($view, $params = []){

        if(file_exists(_VIEWS_ . '/' . self::$controller . '/' . $view . '.php')){
            extract($params);
            ob_start();
            require_once _VIEWS_ . '/' . self::$controller . '/' . $view . '.php';
            $content = ob_get_clean();
            echo $content;
        }else{
            echo 'View not found';
        }
    }

}