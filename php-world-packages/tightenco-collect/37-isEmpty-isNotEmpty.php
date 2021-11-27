<?php

require "../bootstrap.php";

$newCollection  = collect([])->isEmpty();
$newCollection2 = collect([1,2,3])->isEmpty();
$newCollection3 = collect([false])->isEmpty();
$newCollection4 = collect([])->isNotEmpty();
$newCollection5 = collect([1,2,3])->isNotEmpty();
$newCollection6 = collect(['',null,false])->isNotEmpty();

dump($newCollection);
dump($newCollection2);
dump($newCollection3);
dump($newCollection4);
dump($newCollection5);
dump($newCollection6);