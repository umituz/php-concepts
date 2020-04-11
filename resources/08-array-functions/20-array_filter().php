<?php

/**
 * array_filter() => Dizinin içerisinde bulunan boş elemanları filtreleyerek
 * yeni bir dizi oluşturmak için kullanılır.
 */

$arr = ["mavi","","sari","lacivert","","kirmizi"];

$conslusion = array_filter($arr);

echo "<pre>";
print_r($conslusion);