<?php

include_once "system/autoload.php";

$url = @$_GET['url'];
$url = array_filter(explode('/',$url));

$controller = @$url[0];
$method = @$url[1];
$parameter = @$url[2];

echo (new $controller())->$method($parameter);