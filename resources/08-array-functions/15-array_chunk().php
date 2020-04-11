<?php

/**
 * array_chunk() => Dizinin belli bölümlerini alıp parçalayarak yeni bir çok boyutlu
 * dizi oluşturmak için kullanılır.
 * 2. parametrede belirtilen sayıda çok boyutlu dizi oluşturur.
 * 3.parametre olarak true verilirse anahtarlar korunur
 */

$arr = [0,1,2,3,4,5,6,7,8,9];

$conslusion = array_chunk($arr,3);

echo "<pre>";
print_r($conslusion);