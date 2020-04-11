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

function ParaBirimi($Birim, $Tutar){
    if($Birim=="Türk Lirası"){
        $Kur	= money_tl();
    }elseif($Birim=="Amerikan Doları"){
        $Kur	= money_usd();
    }elseif($Birim=="Euro"){
        $Kur	= money_euro();
    }else{
        $Kur	=	0;
    }

    return Hesapla($Birim, $Kur, $Tutar);
}
function money_tl(){
    return 	1;
}

function money_usd(){
    return 4.0669;
}

function money_euro(){
    return 	4.9123;
}

function Hesapla($BirimBilgisi, $KurBilgisi, $TutarBilgisi){
    $Sonuc	=	$KurBilgisi * $TutarBilgisi;
    echo Sonuc($Sonuc,$TutarBilgisi,$BirimBilgisi,$KurBilgisi);
}

function Sonuc($Sonuc,$TutarBilgisi,$BirimBilgisi,$KurBilgisi){
    return $TutarBilgisi . " Tutarlı " . $BirimBilgisi . " Karşılığı Türk Lirası Değeri : " . $Sonuc . " TL<br />Kur : " . $KurBilgisi;
}

ParaBirimi("Euro", 1905);

?>
</body>
</html>