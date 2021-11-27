<?php

require "../bootstrap.php";

$collection = collect([
    100,200,300,400
]);

$newCollection  = $collection->first();
$newCollection2  = collect([])->first(null,500);
$newCollection3  = $collection->first(function($item){
    return $item > 300;
},500);

dump($newCollection);
dump($newCollection2);
dump($newCollection3);