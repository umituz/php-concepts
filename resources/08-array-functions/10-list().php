<?php

/**
 * list() => Dizi içerisindeki elemanları değişkene atamak için kullanılır
 * Sıralama önemlidir.
 * Verilmek istenmiyorsa ,, yapılıp boş bırakılabilir.
 */

$arr = ['mavi','sari',array("a","b"),'yesil','kirmizi'];

list($mavi,$sari,list($a,$b),$kirmizi) = $arr;

echo $b;