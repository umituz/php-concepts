<?php

/**
 * array_column() => Çok boyutlu bir dizi içerisinde bulunan elemanları belirtilecek olan
 * anahtar koşullarına göre biçimlendirerek yeni bir dizi oluşturmak için kullanılır.
 */

$teams = [["team_name" => "FB", "establishment" => 1907],["team_name" => "GS", "establishment" => 1905],["team_name" => "BJK", "establishment" => 1903]];

$column = array_column($teams,"team_name","establishment");

echo "<pre>";
print_r($column);