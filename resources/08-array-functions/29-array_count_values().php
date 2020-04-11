<?php

/**
 * array_count_values() => Dizi içerisinde bulunana elemanların kaçar defa tekrarlandığını
 * bulmak için kullanılır.
 */

$arr = ["umut","ahmet","memet","asaf","umut","mustafa"];

$conslusion = array_count_values($arr);

echo "<pre>";
print_r($conslusion);