<?php

require "../bootstrap.php";

$collection = collect([
    ['product' => 'apples','price' => 59],
    ['product' => 'apples','price' => 69],
    ['product' => 'bananas','price' => 54],
    ['product' => 'bananas','price' => 64],
]);

$newCollection = $collection->mapToDictionary(function($item){
    return [$item['product'] => $item['price']];
});

dump($newCollection);

$newCollection2 = $collection->mapToGroups(function($item){
    return [$item['product'] => $item['price']];
});

dump($newCollection2);

$newCollection3 = $collection->mapToGroups(function($item){
    return [$item['product'] => $item['price']];
})->map(function($item){
    return $item->max();
});

dump($newCollection3);