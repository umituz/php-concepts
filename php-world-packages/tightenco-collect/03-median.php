<?php

require "../bootstrap.php";

$arr = collect([10,20,30])->median();

dump($arr);

$arr2 = collect([
    ['price' => 100],
    ['price' => 200],
    ['price' => 300]
])->median('price');

dump($arr2);