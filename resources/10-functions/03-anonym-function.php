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

$yazdir = function(){
    echo "UZ Yazılım - Ümit UZ";
};

//$yazdir();

$arr = [
    "gaziantep",
    "adana",
    "istanbul",
    function(){
        echo "just test";
    },
    "izmir"
];

$arr[3]();
//echo "<pre>";
//print_r($arr() );

?>
</body>
</html>