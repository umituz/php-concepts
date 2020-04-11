<?php

/**
 * array_pad() => Dizinin elemanlar sayısını baz alarak belirtilecek olan
 * değerler doğrultusunda baştan veya sondan doldurma işlemi yaparak
 * yeni bir dizi oluşturmak için kullanılır.
 */

$arr = [1,2,3,4,5,"a","b","c","d"];

$conslusion = array_pad($arr,25,"Ümit UZ");

echo "<pre>";
print_r($conslusion);