<?php

require "../bootstrap.php";

$collection = collect([
    ['product' => 'apples','price' => null,'quantity' => 5],
    ['product' => 'pears','price' => 50,'quantity' => 10],
    ['product' => 'bananas','price' => 70,'quantity' => 15],
    ['product' => 'coconuts','price' => 80,'quantity' => 20],
]);

$newCollection  = $collection->firstWhere('price',50);
$newCollection2  = $collection->firstWhere('price','>',50);
$newCollection3  = $collection->firstWhere('price');

dump($newCollection);
dump($newCollection2);
dump($newCollection3);