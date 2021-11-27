<?php

require "../bootstrap.php";

$data = collect(['product' => 'apples','price' => 45])->toArray();

dump(json_encode($data));

$dataJson = collect(['product' => 'apples','price' => 45])->toJson();
$dataJson2 = collect(['product' => 'apples','price' => 45])->toJson(JSON_PRETTY_PRINT);

dump($dataJson);
dump($dataJson2);
