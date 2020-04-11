<?php

/**
 * array_intersect() => Birden fazla dizi içerisinde bulunan ve aynı eleman değerlerine sahip
 * elemanlardan yeni bir dizi oluşturmak için kullanılır.
 *
 * array_intersect_key() => Birden fazla dizi içerisinde bulunan ve aynı anahtar isimlerine sahip
 * elemanlardan yeni bir dizi oluşturmak için kullanılır.
 *
 * array_intersect_assoc() => Birden fazla dizi içerisinde bulunan ve aynı anahtar isimlerine sahip
 *  ve aynı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
 */

/**
 * İlk dizinin anahtar değeri geçerli olur.
 */

$arr1 = ["bir" => "a","iki"=>"b","uc" => "c","dort" => "d","bes"=>"e","alti"=>"uz"];
$arr2 = ["bes" => 1,"uc" => "c","alti" => "uz","iki" => 3];

//$conslusion = array_intersect($arr1,$arr2);
//$conslusion = array_intersect_key($arr1,$arr2);
$conslusion = array_intersect_assoc($arr1,$arr2);

echo "<pre>";
print_r($conslusion );