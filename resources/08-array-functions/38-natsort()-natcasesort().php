<?php

/**
 * natsort() => Dizinin elemanlarını büyük-küçük harf duyarlı olacak ve doğal
 * sıralama şeklinde A'dan Z'ye ya da küçükten büyüğe sıralamak için kullanılır.
 *
 * natcasesort() => Dizinin elemanlarını doğal
 * sıralama şeklinde A'dan Z'ye ya da küçükten büyüğe sıralamak için kullanılır.
 */

$images = ["img1","IMG12","img149","img96","img28","img25"];

//sort($images);
//natsort($images);
natcasesort($images);

echo "<pre>";
print_r($images);