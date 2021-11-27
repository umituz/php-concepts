<?php

require "../bootstrap.php";

$arr = collect([1,2,3])->diff([2,4,6]);

dump($arr);

$arr2 = collect(['apple','banana'])->diff(['pears','banana']);

dump($arr2);

// both must match not single
$arr3 = collect([10 => 'apple',20 => 'bananas'])
    ->diffAssoc([30 => 'pears',20 => 'banana']);

dump($arr3);

$arr4 = collect([10 => 'apple',20 => 'bananas'])
    ->diffKeys([30 => 'pears',20 => 'banana']);

dump($arr4);