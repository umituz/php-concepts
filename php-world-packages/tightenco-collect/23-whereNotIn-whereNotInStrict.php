<?php

require "../bootstrap.php";

$collection = collect([
    ['product' => 'apples','price' => 50],
    ['product' => 'pears','price' => 60],
    ['product' => 'bananas','price' => 70],
    ['product' => 'coconuts','price' => 80],
]);

$newCollection  = $collection->whereNotIn('price',["50","70"]);
$newCollection2  = $collection->whereNotInStrict('price',["50","70"]);
$newCollection3  = $collection->whereNotInStrict('price',[50,70]);

dump($newCollection);
dump($newCollection2);
dump($newCollection3);