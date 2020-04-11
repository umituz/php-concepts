<?php

/**
 * array_unique() => Dizinin içerisinde bulunan ve tekrarlanan elemanların
 * fazla olanlarını silerek yeni bir dizi oluşturmak için kullanılır.
 */

//$arr = ["a" => "a", "b" => "a","c" => "a"];
$arr = [1,1,1,1,1,1,1,1,1,1,2];

$conslusion = array_unique($arr);

echo "<pre>";
print_r($conslusion);