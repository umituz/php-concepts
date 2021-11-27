<?php

require "../bootstrap.php";

$arr = collect(
    [collect([1,2,3]),collect([3,2,1])]
)->all();
dump($arr);
echo "<br>";
$arr2 = collect(
    [collect([1,2,3]),collect([3,2,1])]
)->toArray();

dump($arr2);