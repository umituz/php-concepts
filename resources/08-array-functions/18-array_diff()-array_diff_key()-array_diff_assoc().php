<?php

/**
 * array_diff() => Birden fazla dizi içerisinde bulunan ve farklı eleman değerlerine sahip
 * elemanlardan yeni bir dizi oluşturmak için kullanılır.
 *
 * array_diff_key() => Birden fazla dizi içerisinde bulunan ve farklı anahtar isimlerine sahip
 * elemanlardan yeni bir dizi oluşturmak için kullanılır.
 *
 * array_diff_key() => Birden fazla dizi içerisinde bulunan ve farklı anahtar isimlerine
 * ve farklı eleman değerlerine sahip elemanlardan yeni bir dizi
 * oluşturmak için kullanılır.
 */

$arr1 = ["telli_turna" => "a","hi_teacher" => "b","z" => "c"];
$arr2 = ["sevgi" => 1,"z" => "c","hi_teacher" => "b "];

//$conslusion = array_diff($arr1,$arr2);
//$conslusion = array_diff_key($arr1,$arr2);
$conslusion = array_diff_assoc($arr1,$arr2);

echo "<pre>";
print_r($conslusion);
