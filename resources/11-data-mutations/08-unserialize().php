<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>

<body>
<?php
/*
serialize()		:	Herhangi bir değeri saklanabilir veri türüne dönüştürerek, dönüştürdüğü değeri geriye döndürür.
unserialize()	:	serialize() metodu kullanılarak üretilmiş olan herhangi bir saklanabilir veri türündeki değeri eski orjinal haline dönüştürerek, dönüştürdüğü değeri geriye döndürür.
*/

$Bilgiler		=	'a:4:{s:4:"Isim";s:5:"Ümit";s:7:"Soyisim";s:2:"UZ";s:5:"Sehir";s:9:"Gaziantep";s:3:"Yas";i:23;}';

echo $Bilgiler . "<br /><br />";

$Sonuc			=	unserialize($Bilgiler);

echo "<pre>";
print_r($Sonuc);
echo "<pre>";

?>
</body>
</html>