<?php

require "../bootstrap.php";

$data = [
    [10,20,30],
    [50,60,70]
];

$arr = collect($data)->collapse();
$arr1 = collect($data)->collapse()->first();
$arr2 = collect($data)->collapse()->last();
$arr3 = collect($data)->collapse()->toArray();

dump($arr);
dump($arr1);
dump($arr2);
dump($arr3);

$data2 = [
    [0 => ['array1']],
    [1 => ['array2']],
    [2,3,4]
];
$arr4 = collect($data2)->collapse();
dump($arr4);
