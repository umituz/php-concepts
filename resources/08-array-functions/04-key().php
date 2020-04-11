<?php

/**
 * key() => Dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.
 * Dizinin göstericisi, dizinin ilk elemanıdır. Dizinin ilk elemanının key ini key() ile buluruz
 * */

$arr = ["name" => "Ümit",1,2,3,4,5,6,7,8,9];

$a = key($arr);
echo "Dizinin göstericisinin anahtar değeri : " .$a;
//print_r($arr);