<?php

require "../bootstrap.php";

$key1 = collect(['column1','column2']);

$arr = $key1->combine(['value1','value2']);

dump($arr);

$arr2 = $key1->combine([
    ['value1' => 123,'value3' => 789],
    ['value2' => 456]
]);

dump($arr2);