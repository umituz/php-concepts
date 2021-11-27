<?php

require "../bootstrap.php";

$collection = collect([
    ['product' => 'apples','price' => 50],
    ['product' => 'pears','price' => 50],
    ['product' => 'bananas','price' => 70],
    ['product' => 'coconuts','price' => 80],
]);

$newCollection  = $collection->whereBetween('price',[50,70]);
$newCollection2  = $collection->whereNotBetween('price',[50,70]);

dump($newCollection);
dump($newCollection2);