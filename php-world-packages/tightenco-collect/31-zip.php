<?php

require "../bootstrap.php";

$collection = collect([
    1,2,3,4
]);

$newCollection  = $collection->zip([5,6,7,8]);
$newCollection2  = $collection->zip([5,6,7,8],['a','b','c','d']);
$newCollection3  = $collection->zip([5,6,7,8],[null,'a','b']);
$newCollection4  = collect(["id","name","email"])->zip([123,"umut","umituz998@gmail.com"]);

dump($newCollection);
dump($newCollection2);
dump($newCollection3);
dump($newCollection4);