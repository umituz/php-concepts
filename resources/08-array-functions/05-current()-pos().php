<?php

/**
 * current() => Dizinin göstericisi konumundaki elemanı bulur
 * pos() => Dizinin göstericisi konumundaki elemanı bulur
 */

$arr = ["a","b","c","d"];

$key = key($arr);
$current = current($arr);
$pos = pos($arr);
echo "Dizi göstericisinin anahtar ve deperi :  key => {$key} value => {$current} OR value => {$pos}";