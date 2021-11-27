<?php

require "../bootstrap.php";

$collection = collect([
    100,200,300,400,500,600,700,800
]);

$newCollection  = $collection->take(2);
$newCollection2  = $collection->take(-2);
$newCollection3  = $collection->reverse()->take(-2);

dump($newCollection);
dump($newCollection2);
dump($newCollection3);