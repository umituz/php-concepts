<?php

/**
 * array_reverse() => Dizi içerisinde bulunan elemanların tersten sıralanmasını sağlayarak
 * yeni bir dizi oluşturmak için kullanılır.
 */

$arr = ["volkan","hakan","onur","serkan"];

$result = array_reverse($arr);

echo "<pre>";
print_r($result);