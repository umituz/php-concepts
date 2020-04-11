<?php

/**
 * sort() => Dizinin elemanlarını büyük-küçük harf duyarlı olacak şekilde
 * A'dan Z'ye yada küçükten büyüğe sıralamak için kullanılır.
 *
 * rsort() => Dizinin elemanlarını büyük-küçük harf duyarlı olacak şekilde
 * Z'den A'ya yada büyükten küçüğe sıralamak için kullanılır.
 *
 * asort() => Dizinin elemanlarını büyük-küçük harf duyarlı olacak ve anahtarlarını
 * bozmayacak şekilde A'dan Z'ye yada küçükten büyüğe sıralamak için kullanılır.
 *
 * arsort() => Dizinin elemanlarını büyük-küçük harf duyarlı olacak ve anahtarlarını
 * bozmayacak şekilde Z'den A'ya yada büyükten küçüğe sıralamak için kullanılır.
 */

$arr = [
    "umut",
    "php",
    "destan",
    "makale",
    "bilim",
    "BİLİM",
    "GELECEK",
    "aydinlik",
    "döngü"
];

asort($arr);
//krsort($arr);

echo "<pre>";
print_r($arr);