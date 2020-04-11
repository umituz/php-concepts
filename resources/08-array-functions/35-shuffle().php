<?php

/**
 * shuffle() => Dizi içerisinde bulunan elemanların sıralarının karıştırılması için
 * kullanılır
 */

$arr = [array(1,2,3,"ze","ye","ve"),"bir" ,"a","iki" ,"b","c","uz","d","e","f"];

shuffle($arr[0]);
shuffle($arr);

echo "<pre>";
print_r($arr);