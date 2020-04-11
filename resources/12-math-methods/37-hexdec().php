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
bindec()	:	Herhangi bir binary (ikilik) sayının, decimal (onluk) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
octdec()	:	Herhangi bir octal (sekizlik) sayının, decimal (onluk) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
hexdec()	:	Herhangi bir hexadecimal (onaltılık) sayının, decimal (onluk) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
*/

$Sayi		=	91;

$Donustur	=	hexdec($Sayi);

echo $Sayi . " hexadecimal (onaltılık) sayının, decimal (onluk) sayı sistemi karşılığı : " . $Donustur;

?>
</body>
</html>