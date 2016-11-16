<?php
/**
 * Created by PhpStorm.
 * User: pedorenko
 * Date: 16.11.2016
 * Time: 10:35
 */

require_once dirname(__DIR__) . "/config/config.php";
require_once _ROUTER_;

$route = new Router($_SERVER['REQUEST_URI']);
$route->autoLoad($rules);
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<pre>Route = <?=print_r($route->getRoute(), 1)?></pre>

</body>
</html>
