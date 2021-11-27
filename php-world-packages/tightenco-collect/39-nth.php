<?php

require "../bootstrap.php";

$collection = collect([
    1,2,3,4
]);

$newCollection  = $collection->nth(1);
$newCollection2  = $collection->nth(2);
$newCollection3  = $collection->nth(3);
$newCollection4  = $collection->nth(2,1);

dump($newCollection);
dump($newCollection2);
dump($newCollection3);
dump($newCollection4);