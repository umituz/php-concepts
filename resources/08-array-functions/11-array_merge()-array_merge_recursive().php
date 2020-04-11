<?php

/**
 * array_merge() => Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanırlır
 * array_merge_recursive() => Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanırlır (Gelişmiş)
 */

$arr1 = ["bir" => "a", 1 => "b", 2 => "c"];
$arr2 = [0 => 1, "bir" => 2, 2 => 3];
$arr3 = ["umut","ümit","uz"];
$conslusion1 = array_merge($arr1,$arr2);
$conslusion2 = array_merge_recursive($arr1,$arr2);

echo "<pre>";
print_r($conslusion2);
echo "</pre>";