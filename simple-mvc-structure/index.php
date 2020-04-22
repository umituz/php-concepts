<?php

require_once "system/autoload.php";

$value = 123;
$name= "umut";

(new usercontroller())->view("home",compact('value','name'));
//echo (new usercontroller())->show();
