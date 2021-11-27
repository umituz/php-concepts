<?php

require "../bootstrap.php";

$arr = collect([1,2,3 => [7,8,9],4,5])->count();

dump($arr);