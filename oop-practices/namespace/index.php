<?php

include "first_namespace.php";
include 'second_namespace.php';
include "third_namespace.php";

use Second\A;
use Third\A as thirdA;

$object = new A;
echo "<br>";
$objectFirst = new \A;
echo "<br>";
$objectThird = new thirdA;
