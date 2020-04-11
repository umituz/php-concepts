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
func_num_args()		:	Fonksiyona gönderilen parametre sayısını bulmak için kullanılır.
func_get_args()		:	Fonksiyona gönderilen parametre değerlerini alarak yeni bir dizi oluşturmak için kullanılır.
func_get_arg()		:	Fonksiyona gönderilen parametre değerlerini bir dizi olarak kabul ederek, belirtilecek olan anahtara ait elemanın değerini döndürmek için kullanılır.
*/

function Bilgiler(){

    $GelenParametreSayisi		=	func_num_args();

    echo "Fonksiyona Gelen Parametre Sayısı : " . $GelenParametreSayisi . "<br />";

    $GelenParametreDegerleri	=	func_get_args();

    echo "<pre>";
    print_r($GelenParametreDegerleri);
    echo "</pre><br />";

    $MeslekDegeri		=	func_get_arg(2);
    echo $MeslekDegeri . "<br /><br />";

    foreach($GelenParametreDegerleri as $SonucDegerleri){
        echo $SonucDegerleri . "<br />";
    }

}

Bilgiler("Ümit UZ", "Gaziantep", "Bilgisayar programlama ve yazılım geliştirme uzmanı", 23, "Erkek", "info@umituz.com", "https://www.umituz.com");

?>
</body>
</html>