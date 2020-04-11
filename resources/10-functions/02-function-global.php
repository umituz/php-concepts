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

$Isim	=	"Ümit";
$Soyisim = "UZ";
const Hello = "Hello World";
function Yaz(){
    global $Isim,$Soyisim;
    echo $Isim . " - " . $Soyisim . "<br />" . Hello;
}

Yaz();

?>
</body>
</html>