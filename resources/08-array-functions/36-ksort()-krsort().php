<?php

/**
 * ksort() => Dizinin anahtarlarını büyük küçük harf duyarlı A'dan Z'ye yada küçükten
 * büyüğe sıralamak için kullanılır.
 *
 * krsort() => Dizinin anahtarlarını büyük küçük harf duyarlı Z'den A'ya yada
 * büyükten küçüğe sıralamak için kullanılır.
 */

$arr = [
    "bir" => "umut",
    "iki" => "ahmet",
    "uc" => "asaf",
    "dort" => "mustafa",
    "bes" => "reyyan",
    "alti" => "cuma",
    "8" => "uz",
    "19" => "deneme"
];

ksort($arr);
//krsort($arr);

echo "<pre>";
print_r($arr);