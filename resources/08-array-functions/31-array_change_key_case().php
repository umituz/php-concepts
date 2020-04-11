<?php

/**
 * array_change_key_case() => Dizi içerisinde bulunan anahtarların büyük harf küçük harf
 * dönüştürmesi için kullanılır
 */

$arr = ["AAA" => "umut","a2" => "ümit","a3" => "uz"];

$result = array_change_key_case($arr,CASE_UPPER);

echo "<pre>";
print_r($result);