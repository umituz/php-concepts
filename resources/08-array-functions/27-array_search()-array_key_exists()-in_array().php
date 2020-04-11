<?php

/**
 * array_search() - Dizi içerisinde bulunana elemanlar dahilinde belirtilecek olan elemanı
 * aramak ve ilgili elemanın anahtarını bulmak için kullanılır.
 *
 * array_key_exists() - Dizi içerisinde bulunana elemanlar dahilinde belirtilecek olan anahtarlar
 * dahilinde belirtilecek olan anahtarın olup olmadığını kontrol etmek için kullanılır
 *
 * in_array() - Dizi içerisinde bulunana elemanlar dahilinde belirtilecek olan elemanın olup
 * olmadığını kontrol etmek için kullanılır.
 */

$arr = ["a" => "Adana","c" => "Çanakkale","e" => "Erzurum","b" => "5","z" => 5];

//$conslusion = array_search(5,$arr,true);
//$conslusion = array_key_exists("e",$arr);
$conslusion = in_array("Çanakkale",$arr);

echo "<pre>";
print_r($conslusion);