<?php

/**
 * array_rand() => Dizi içerisinde bulunan elemanlardan belirtilecek eleman sayısı kadar
 * rastgele değer döndürmek için kullanılır.
 */

$arr = ["umut","ümit","özgür","gökhan"];

$result = array_rand($arr,2);

echo "<pre>";
print_r($result);
echo "</pre>";

echo "<br>" . $arr[$result[0]] ;
echo "<br>" . $arr[$result[1]] ;
