<?php

require "../bootstrap.php";

$arr = collect([1,2,3])->reverse()
    ->tap(function($collection){
        $collection->reverse()->each(function($value){
            dump(   'In tap : ' . $value);
        });
    });