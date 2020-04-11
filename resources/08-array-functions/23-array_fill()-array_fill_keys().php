<?php

/**
 * array_fill() => Belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak
 * yeni bir dizi oluşturmak için kullaılır.
 *
 * array_fill_keys() => Dizi içerisinde bulunan elemanları anahtar gibi görerek
 * belirtilecek olan değer doğrultusunda doldurma işlemi yaparak yeni
 * bir dizi oluşturmak için kullanılır.
 */

//$conslusion = array_fill(100,10,"Ümit UZ");

$arr = ["bir","iki","uc"];
$conslusion = array_fill_keys($arr,["Ümit UZ","Umut UZ","UZ Yazılım"]);

echo "<pre>";
print_r($conslusion);