<?php

require "../bootstrap.php";

$collection = collect([1,2,3,4]);

//$newCollection = $collection->dd();
//$newCollection2 = $collection->map(function($item){
//    return $item * 3;
//})->dd();
//$newCollection3 = $collection->map(function($item){
//    return $item * 3;
//})->mapWithKeys(function($item){
//    return [$item + 10 => $item];
//})->dd();
$newCollection4 = $collection->map(function($item){
    return $item * 3;
})->mapWithKeys(function($item){
    return [$item + 10 => $item];
})->reverse()->dd();
