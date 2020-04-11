<?php

/**
 * compact() => Dizi içerisinde bulunan elemanları anahtar gibi görerek daha önceden
 * aynı isimle tanımlanmış olan değişkenlerden ilgili anahtarlara değer üretmek için
 * kullanılır
 */


$name = "umut";
$year = 1996;

$conslusion = compact("name","year");

echo "<pre>";
print_r($conslusion );