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
	gettype()	:	Herhangi bir değişken içeriğinin veri türünü bularak, bulduğu değeri geriye döndürür.
	*/

	$Deger		=	"Ümit UZ";

	$Sonuc		=	gettype($Deger);

	echo $Deger . "<br />";
echo "Veri Türü : " . $Sonuc;

?>
</body>
</html>