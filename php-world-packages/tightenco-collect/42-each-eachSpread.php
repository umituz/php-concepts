<?php

require "../bootstrap.php";

$collection = collect([
    1,2,3,4
]);

$newCollection  = $collection->each(function($value){
    dump("Mevcut değer : {$value}");
});

$newCollection2  = $collection->each(function($value){
    if($value > 2){
        return false;
    }
    dump("2.örnek Mevcut değer : {$value}");
});

$newCollection3 = collect([
    ['elma',45,'Amasya'],
    ['muz',90,'Anamur'],
    ['şeftali',20,'İstanbul']
])->each(function ($value){
    dump("Each => {$value[1]} bin adet {$value[0]} var {$value[2]} dükkanımızda.");
});

$newCollection4 = collect([
    ['elma',45,'Amasya'],
    ['muz',90,'Anamur'],
    ['şeftali',20,'İstanbul']
])->eachSpread(function ($product,$quantity,$location){
    dump("Each spread => {$quantity} bin adet {$product} var {$location} dükkanımızda.");
});