<?php

require "../bootstrap.php";

$arr = collect([
    ['other' => 'value1']
])->contains('other','value1');

dump($arr);

$arr1 = collect([
    1,2,3,4,5
])->contains(function($value,$key){
    return $value >= 5;
});

dump($arr1);

$arr2 = collect([
    15
])->contains('15');

dump($arr2);

$arr3 = collect([
    15
])->containsStrict('15');

dump($arr3);

