<?php

require "../bootstrap.php";

$arr = collect([1,2,3,4,5,6,7,8])->chunk(2)
    ->mapSpread(function($a,$b){
    return $a * $b;
});

dump($arr);

$arr2 = collect([1,2,3,4,5,6,7,8,9])->chunk(3)
    ->mapSpread(function($a,$b,$c){
    return [$a * $b => $c];
});

dump($arr2);