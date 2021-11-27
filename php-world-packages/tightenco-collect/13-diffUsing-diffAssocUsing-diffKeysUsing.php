<?php

require "../bootstrap.php";

$arr = collect([10,25,50])->diffUsing([.1,.25],function ($a,$b){
    return ($a === (int)($b * 100)) ? 0 : -1;
});

dump($arr);

$arr2 = collect([10 => 'apple',25 => 'banana',50 => 'coconut'])
    ->diffAssocUsing(['.1' => 'apple','.25'=> 'pears'],function ($a,$b){
    return ($a === (int)($b * 100)) ? 0 : -1;
});

dump($arr2);

$arr3 = collect([10 => 'apple',25 => 'banana',50 => 'coconut'])
    ->diffKeysUsing(['.1' => 'apple','.25'=> 'pears'],function ($a,$b){
    return ($a === (int)($b * 100)) ? 0 : -1;
});

dump($arr3);