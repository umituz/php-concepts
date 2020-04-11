<?php

/**
 * array_replace() => Birden fazla dizi içerisinde bulunana elemanların, ilk dizi içerisinde
 * olanları baz alarak kendisinden sonra gelecek olan diziler içerisinde bulunanan elemanlarla
 * güncelleyerek yeni bir dizi oluşturmak için kullanılır. (Tek boyutlu diziler)
 *
 * array_replace_recursive() => Birden fazla dizi içerisinde bulunana elemanların, ilk dizi içerisinde
 * olanları baz alarak kendisinden sonra gelecek olan diziler içerisinde bulunanan elemanlarla
 * güncelleyerek yeni bir dizi oluşturmak için kullanılır. (Gelişmiş, çoklu diziler)
 */

$arr1 = ["z" => 3,4,[1,2]];
$arr2 = ["z" => 9,6,[3]];

//$conslusion = array_replace($arr1,$arr2,$arr3);
$conslusion = array_replace_recursive($arr1,$arr2);

echo "<pre>";
print_r($conslusion);