<?php

/**
 * prev() => Dizinin gösterici konumunundaki anahtarı veya elemanı bir geri almak için kullanılır
 * next() => Dizinin gösterici konumunundaki anahtarı veya elemanı bir ileri almak için kullanılır
 * reset() => Dizinin gösterici konumunundaki anahtarı veya elemanı varsayılan konumuna (ilk) almak için kullanılır.
 */

$arr = [1,2,3,4,5,6,7,8,9];
next($arr);
next($arr);
next($arr);
prev($arr);
reset($arr);
$key=key($arr);

print_r($key);
