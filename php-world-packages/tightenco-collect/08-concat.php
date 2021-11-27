<?php

require "../bootstrap.php";

$data = collect(['key1' => 'value1']);

// concat method ignore keys
$arr = $data->concat(['key2' => 'value2']);

dump($arr);
