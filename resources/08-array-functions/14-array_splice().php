<?php

/**
 * array_splice() => Dizinin belli bölümlerini alıp, belli bölümlerini silip,
 * eğer belirtilirse yeni elemanlarda ekleyerek yeni bir dizi oluşturmak için kullanılır.
 */

$arr = ["a","b","c","d","e","f","g","h","j","k","l","m","n"];

echo "<pre>";
print_r($arr);
echo "</pre><br>";

$newArr = array_splice($arr,1,count($arr),["surname" => "uz","umut","umit"]);

echo "<pre>";
print_r($arr);
echo "</pre><br>";