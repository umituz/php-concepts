<?php

require "../bootstrap.php";

$collection = collect([
    ['product' => 'apples','price' => 50],
    ['product' => 'pears','price' => 50],
    ['product' => 'bananas','price' => 70],
    ['product' => 'coconuts','price' => 80],
]);

$newCollection  = $collection->where('price','50');
$newCollection2 = $collection->whereStrict('price',"50");
$newCollection3 = $collection->whereStrict('price',50);
$newCollection4 = $collection->where('price','    50.0000');
$newCollection5 = $collection->whereStrict('price','    50.0000');
$newCollection6 = $collection->where('price','>',50);
$newCollection7 = $collection->whereStrict('price','>',50); // it just works for where not whereStrict

dump($newCollection);
dump($newCollection2);
dump($newCollection3);
dump($newCollection4);
dump($newCollection5);
dump($newCollection6);
dump($newCollection7);