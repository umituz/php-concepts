<?php

require "../bootstrap.php";

$collection = collect([
    1,2,3,4
]);

$newCollection  = $collection->reverse();
$newCollection2  = collect(['key1' => 'string1','key2' => 'string2'])->reverse();
$newCollection3  = collect(['key1' => 'string1','key2' => 'string2'])->reverse()->values();
$newCollection4  = $collection->reverse()->values();

dump($newCollection);
dump($newCollection2);
dump($newCollection3);
dump($newCollection4);