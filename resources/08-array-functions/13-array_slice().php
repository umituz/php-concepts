<?php

/**
 * array_slice() => Dizinin belli bölümlerini alarak yeni bir dizi oluşturmak için kullanılır
 */

$arr = ["bir" => "a","iki" =>  "b","uc" => "c","dort" => "d","bes" => "z","alti" => "y","yedi" => "u"];

$conslusion = array_slice($arr,1,3);

echo "<pre>";
print_r($conslusion);
echo "</pre>";