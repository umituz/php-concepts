<?php

require "../bootstrap.php";

$arr = collect([1,2,3])->map(function($item,$key){
    return $item * $key;
});

dump($arr);

$arr2 = collect(['value1' => 'first','value2' => 'second'])->map(function($item,$key){
    return $item . " " .  $key;
});

dump($arr2);