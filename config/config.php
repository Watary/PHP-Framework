<?php
/**
 * Created by PhpStorm.
 * User: pedorenko
 * Date: 16.11.2016
 * Time: 13:20
 */

define("_APP_", dirname(__DIR__) . "/app");
define("_VIEWS_", dirname(__DIR__) . "/app/views");
define("_CONFIG_", dirname(__DIR__) . "/config");
define("_CORE_", dirname(__DIR__) . "/vendor/core");
define("_ROUTER_", dirname(__DIR__) . "/vendor/core/Router.php");
define("_CONTROLLER_", dirname(__DIR__) . "/vendor/core/Controller.php");

$rules = [
    ['controller' => ['', 'main'], 'action' => ['', 'index']],
];