<?php

/**
 * array_combine() => İki farklı diziyi ilişkisel olarak birleştirerek yeni bir dizi oluşturmak için kullanılır.
 */

$arr1 = ["mavi","beyaz","kirmizi"];
$arr2 = [array("araba","uçak","gemi"),"perde","gömlek"];

$conslusion = array_combine($arr1,$arr2);

echo "<pre>";
print_r($conslusion);
echo "</pre>";