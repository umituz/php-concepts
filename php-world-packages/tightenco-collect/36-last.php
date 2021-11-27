<?php

require "../bootstrap.php";

$collection = collect([
    100,200,300,400,500,600,700,800
]);

$newCollection  = $collection->last();
$newCollection2  = collect([])->last(null,10000);
$newCollection3  = $collection->last(function($item){
    return $item > 300;
},10000);

dump($newCollection);
dump($newCollection2);
dump($newCollection3);