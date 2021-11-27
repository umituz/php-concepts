<?php

require "../bootstrap.php";

$collection = collect([
    1,2,3,4
]);

$newCollection  = $collection->only([0,3]);
$newCollection2 = collect(['product' => 'apples','price' => '50'])->only('product');
$newCollection3 = collect(['product' => 'apples','price' => '50'])->only('product','price');
$newCollection4 = collect(['product' => 'apples','price' => '50','quantity' => 10])->only(null);

$keys = collect(['product','price','quantity']);
$newCollection5 = collect(['product' => 'apples','price' => '50','quantity' => 10])->only($keys);

dump($newCollection);
dump($newCollection2);
dump($newCollection3);
dump($newCollection4);
dump($newCollection5);