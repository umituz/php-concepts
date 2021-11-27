<?php

require "../bootstrap.php";

$data = [
    1,2,3,4,5,6,7,8
];

$arr = collect($data)->chunk(3);
dump($arr);