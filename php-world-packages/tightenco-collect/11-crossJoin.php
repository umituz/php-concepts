<?php

require "../bootstrap.php";

$arr = collect([1,2])->crossJoin(['a','b'],['c','d']);

dump($arr);

$collection = collect(['Mustang','GT','F150']);

$arr2 = $collection->crossJoin(
    ['automatic','manual'],
    ['blue','black','white','yellow','gray'],
    [2018,2019]
);

dump($arr2);