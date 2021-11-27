<?php

require "../bootstrap.php";

$collection = collect([
    7,8,4,3,1
]);

$newCollection  = $collection->sort();
$newCollection2  = collect(['a45','zd45','h12','eol'])->sort();
$newCollection3  = collect(['A-43','A12','B-23','B54'])->sort(function($a,$b){
     $code = str_replace('-','',$a);
     return ($code < $b) ? -1 : 1;
});

dump($newCollection);
dump($newCollection2);
dump($newCollection3);