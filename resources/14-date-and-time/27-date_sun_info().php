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
date_sun_info()		:	Belirtilecek olan tarih ve lokasyon değerlerine göre, ilgili yerin gün doğumu, gün batımı, öğlen, alacakaranlık başlangıç ve alacakaranlık bitiş değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
    Parametreler : 1. Zaman Damgası, 2. Enlem, 3. Boylam
        sunrise						:	Gün doğumu
        sunset						:	Gün batımı
        transit						:	Öğle
        civil_twilight_begin		:	Kara alacakaranlık başlangıcı
        civil_twilight_end			:	Kara alacakaranlık bitişi
        nautical_twilight_begin		:	Deniz alacakaranlık başlangıcı
        nautical_twilight_end		:	Deniz alacakaranlık bitişi
        astronomical_twilight_begin	:	Astronomik alacakaranlık başlangıcı
        astronomical_twilight_end	:	Astronomik alacakaranlık bitişi

date_sunrise()		:	Belirtilecek olan tarih ve lokasyon değerlerine göre, ilgili yerin gün doğumu değerini bularak, bulduğu değeri geriye döndürür.
    Parametreler 	: 1. Zaman Damgası, 2. Kendi Parametresi, 3. Enlem, 4. Boylam
date_sunset()		:	Belirtilecek olan tarih ve lokasyon değerlerine göre, ilgili yerin gün batımı değerini bularak, bulduğu değeri geriye döndürür.
    Parametreler 	:1. Zaman Damgası, 2. Kendi Parametresi, 3. Enlem, 4. Boylam

date_sunrise() ve date_sunset() metodlarının tanımlı parametreleri :
    1. SUNFUNCS_RET_STRING			:	Sonuç string (alfanumerik) veri türünde değer döndürür.
    2. SUNFUNCS_RET_DOUBLE			:	Sonuç double (ondalıklı sayı) veri türünde değer döndürür.
    3. SUNFUNCS_RET_TIMESTAMP		:	Sonuç zaman damgası olarak döner.
*/

$Zamandamgasi	=	strtotime("1980-12-08");

echo "08.12.1980 Tarihinin Zaman Damgası : " . $Zamandamgasi . "<br />";

$Sor			=	date_sun_info($Zamandamgasi, 39.913627, 32.850879); // T.B.M.M. Enlem ve Boylam Değerleri

echo "<pre>";
print_r($Sor);
echo "<pre>";

?>
</body>
</html>