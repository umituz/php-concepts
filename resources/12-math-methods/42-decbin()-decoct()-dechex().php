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
decbin()	:	Herhangi bir decimal (onluk) sayının, binary (ikilik) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
decoct()	:	Herhangi bir decimal (onluk) sayının, octal (sekizlik) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
dechex()	:	Herhangi bir decimal (onluk) sayının, hexadecimal (onaltılık) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
*/

$Sayi		=	1453;

$BinaryDonustur			=	decbin($Sayi);
$OctalDonustur			=	decoct($Sayi);
$HexadecimalDonustur	=	dechex($Sayi);

echo $Sayi . " decimal (onluk) sayının, binary (ikilik) sayı sistemi karşılığı : " . $BinaryDonustur . "<br />";
echo $Sayi . " decimal (onluk) sayının, octal (sekizlik) sayı sistemi karşılığı : " . $OctalDonustur . "<br />";
echo $Sayi . " decimal (onluk) sayının, hexadecimal (onaltılık) sayı sistemi karşılığı : " . $HexadecimalDonustur;

?>
</body>
</html>