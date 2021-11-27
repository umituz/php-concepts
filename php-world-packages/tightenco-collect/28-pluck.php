<?php

require "../bootstrap.php";

$collection = collect([
    ['product' => 'apples','price' => 50,'quantity' => 5],
    ['product' => 'pears','price' => 60,'quantity' => 10],
    ['product' => 'bananas','price' => 70,'quantity' => 15],
    ['product' => 'coconuts','price' => 80,'quantity' => 20],
]);

$newCollection  = $collection->pluck('product');
$newCollection2  = $collection->pluck('product','quantity');
$newCollection3  = $collection->map(function($item){
    return array_only($item,['product','quantity']);
});
$newCollection4  = $collection->map(function($item){
    return collect($item)->only(['product','quantity'])->all();
});
$newCollection5  = $collection->mapWithKeys(function($item){
    return [
        $item['quantity'] => collect($item)->only(['product','price'])->all()
    ];
});

dump($newCollection);
dump($newCollection2);
dump($newCollection3);
dump($newCollection4);
dump($newCollection5);