<?php

require "../bootstrap.php";

$arr = collect([10,20,30])->average();

dump($arr);

$arr2 = collect([
    ['price' => 100],
    ['price' => 200],
    ['price' => 300]
])->average('price');

dump($arr2);

$arr3 = collect([
    ['price' => 10000,'tax' => 500],
    ['price' => 20000,'tax' => 700],
    ['price' => 30000,'tax' => 900]
])->avg(function($value){
    return $value['price'] + $value['tax'];
});

dump($arr3);

$arr4 = collect([
    ['price' => 10000,'tax' => 500,'active' => false],
    ['price' => 20000,'tax' => 700,'active' => false],
    ['price' => 30000,'tax' => 900,'active' => true]
])->average(function($value){
    if(! $value['active']){
        return null;
    }
    return $value['price'] + $value['tax'];
});

dump($arr4);
