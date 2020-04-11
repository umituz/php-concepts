<?php

/**
 * array_sum() => Dizi içerisinde bulunana elemanların rakamsal değerler içermesi durumunda
 * tüm elemanların toplamını almak için kullanılır.
 *
 * array_product() => Dizi içerisinde bulunana elemanların rakamsal değerler içermesi durumunda
 * tüm elemanların çarpımını almak için kullanılır.
 */

$arr = [5,7,4,10];

$result1 = array_sum($arr);
$result2 = array_product($arr);

echo "<pre>";
print_r($result2);