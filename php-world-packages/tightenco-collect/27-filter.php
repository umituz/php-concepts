<?php

require "../bootstrap.php";

$collection = collect([
    1,2,3,"",null,0,false,[]
]);

$newCollection  = $collection->filter();
$newCollection2  = collect([1,2,3,4])->filter(function($value){
    return ($value % 2) == 0;
});
$newCollection3  = collect([1,2,3,4])->filter(function($value){
    return ($value % 2) == 1;
});
$newCollection4  = collect([1,2,3,4])->filter(function($value,$key){
    return $key > 2;
});

dump($newCollection);
dump($newCollection2);
dump($newCollection3);
dump($newCollection4);