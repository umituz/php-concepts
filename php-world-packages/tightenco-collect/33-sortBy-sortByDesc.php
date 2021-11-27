<?php

require "../bootstrap.php";

$collection = collect([
    ['product' => 'apples','price' => null,'quantity' => 5,'code' => 'A-32'],
    ['product' => 'pears','price' => 50,'quantity' => 10,'code' => 'A50'],
    ['product' => 'bananas','price' => 70,'quantity' => 15,'code' => 'A20'],
    ['product' => 'coconuts','price' => 80,'quantity' => 20,'code' => 'A30'],
]);

$newCollection  = $collection->sortBy('product');
$newCollection2  = $collection->sortByDesc('product');

$newCollection3  = $collection->sortBy(function($item){
    return str_replace('-','',$item['code']);
});

dump($newCollection);
dump($newCollection2);
dump($newCollection3);