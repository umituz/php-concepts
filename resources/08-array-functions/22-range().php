<?php

/**
 * range() => Belirtilecek olan değer aralıkları doğrultusunda doldurma işlemi yaparak
 * yeni bir dizi oluşturmak için kullanılır
 */

$numbers = [11,12,13,14,15];

//$conslusion = range(1,100,10);
$conslusion = range("a","z");

echo "<pre>";
print_r($conslusion);