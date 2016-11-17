<?php

/**
 * Created by PhpStorm.
 * User: pedorenko
 * Date: 17.11.2016
 * Time: 21:27
 */
class Main {

    function actionIndex($params){
        echo 'index';
        if(isset($params))
            foreach ($params as $key => $value){
                echo "<br>[$key] => $value";
            }
    }

    function actionTest(){
        echo 'index Test';
    }

}