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
mt_rand()			:	Mersenne twister algoritması kullanılarak rastgele bir tam sayı üreterek, ürettiği değeri geriye döndürür.
mt_getrandmax()		:	mt_rand() metodu ile Mersenne twister algoritması kullanılarak üretilebilecek olan en büyük sayı değerini bularak, bulduğu değeri geriye döndürür.
*/

$SayiDegeri		=	mt_getrandmax();

echo "PHP tarafından mt_rand() metodu kullanılarak üretilebilecek en büyük sayı değeri : " . $SayiDegeri;

?>
</body>
</html>