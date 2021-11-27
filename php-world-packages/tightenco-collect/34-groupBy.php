<?php

require "../bootstrap.php";

$collection = collect([
    'string1' => ['product' => 'apples','price' => null,'quantity' => 5,'code' => 'A-32'],
    'string2' => ['product' => 'apples','price' => null,'quantity' => 5,'code' => 'A-32'],
    'string3' => ['product' => 'apples','price' => null,'quantity' => 5,'code' => 'A-32'],
    'string4' => ['product' => 'pears','price' => 50,'quantity' => 10,'code' => 'A50'],
    'string5' => ['product' => 'bananas','price' => 70,'quantity' => 15,'code' => 'A20'],
    'string6' => ['product' => 'bananas','price' => 70,'quantity' => 15,'code' => 'A20'],
    'string7' => ['product' => 'coconuts','price' => 80,'quantity' => 20,'code' => 'A30'],
    'string8' => ['product' => 'coconuts','price' => 80,'quantity' => 20,'code' => 'A30'],
    'string9' => ['product' => 'coconuts','price' => 80,'quantity' => 20,'code' => 'A30'],
]);

$newCollection  = $collection->groupBy('product');
$newCollection2  = $collection->groupBy('product',true);
$newCollection3  = $collection->groupBy(function($item){
    return str_replace(['-',''],'',$item['code']);
});

dump($newCollection);
dump($newCollection2);
dump($newCollection3);