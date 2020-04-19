<?php

include_once "vendor/autoload.php";

use App\Http\Controllers\OtherController;
use App\Http\Controllers\ServiceController;

echo (new ServiceController())->show();
br(2);
echo hello_world();
br(2);
echo (new ServiceController())->curl();
br(2);
$other = new OtherController();
echo $other->test();
br(2);
echo $other->extended();
br(2);
echo $other->public();