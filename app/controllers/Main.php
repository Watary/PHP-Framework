<?php

/**
 * Created by PhpStorm.
 * User: pedorenko
 * Date: 17.11.2016
 * Time: 21:27
 */

class Main extends Controller {

    function actionIndex($params){
        $this->render('index', ['var' => 'qwerty']);
        if(isset($params))
            foreach ($params as $key => $value){
                echo "<br>[$key] => $value";
            }
    }

    function actionTest(){
        echo 'index Test';
    }

}