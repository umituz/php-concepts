<?php

/**
 * explode() => Düz bir metni belirtilecek olan ayraca göre parçalayarak yeni bir dizi oluşturmak için kullanılır.
 */

$string = "lorem ipsum dolor sit amet";
$teams = "Fenerbahçe,Beşiktaş,Galatasaray";


$exp = explode(" ",$string);
$teams = explode(",",$teams,-2);
echo "<pre>";
print_r($teams);
echo "</pre>";
