<?php

require "../bootstrap.php";

$collection = collect([
    ['product' => 'apples','price' => 50],
    ['product' => 'pears','price' => 60],
    ['product' => 'bananas','price' => 70],
    ['product' => 'coconuts','price' => 80],
]);

$newCollection  = $collection->whereIn('price',["50","70"]);
$newCollection2  = $collection->whereInStrict('price',["50","70"]);

dump($newCollection);
dump($newCollection2);