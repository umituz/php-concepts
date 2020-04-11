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

$Bir	=	"Volkan Alakent";

function TestFoksiyonu($Bir){
    $Bir	=	"Merhaba Benim Adım " . $Bir;
    echo $Bir . "<br />";
}

TestFoksiyonu($Bir);

echo $Bir;

echo "<br /><br /><br /><br /><br />";

$name	=	"Ümit UZ";

function DemoFoksiyonu(&$name){
    $name	=	"Merhaba Benim Adım " . $name;
    echo $name . "<br />";
}

DemoFoksiyonu($name);

echo $name;

?>
</body>
</html>