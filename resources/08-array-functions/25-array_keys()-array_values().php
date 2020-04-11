<?php

/**
 * array_keys() => Dizinin anahtarlarını alıp yeni bir dizi oluşturmak için kullanılır.
 *
 * array_values() => Dizinin elemanlarını alıp yeni bir dizi oluşturmak için kullanılır.
 */

$arr = ["bir" => "gun","iki" => "dunya","uc" => "alem"];

$keys = array_keys($arr);
$values = array_values($arr);

echo "<pre>";
//print_r($keys);
print_r($values);