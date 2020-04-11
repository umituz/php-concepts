<?php

/**
 * array_flip() => Dizi içerisinde bulunan anahtarların ve elemanların yer değişimi
 * yapması için kullanılır.
 */

$arr = ["name" => "Umut","surname" => "UZ"];

$result = array_flip($arr);

echo "<pre>";
print_r($result);