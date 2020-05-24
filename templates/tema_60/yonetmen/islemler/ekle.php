<?php 
include 'baglan.php';

if (isset($_POST['blog-ekle']))
{
	$uploads='../../resimler/icerik';
	$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
	$name=$_FILES['icerik_resimyol']["name"];

	$benzersizsayi1=rand(20000,40000);
	$benzersizsayi2=rand(20000,40000);
	$benzersizsayi3=rand(20000,40000);
	$benzersizsayi4=rand(20000,40000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;

	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$tarih=$_POST['icerik_tarih'];
	$saat=$_POST['icerik_saat'];
	$zaman=$tarih." ".$saat;

	$alanekle=$db->prepare("INSERT INTO icerik SET 
	icerik_ad=:ad,
	icerik_ozet=:ozet,	
	icerik_detay=:detay,
	icerik_keywords=:keywords,
	icerik_kategori_id=:kategori_id,
	icerik_resimyol=:resimyol,
	icerik_zaman=:zaman
	");

	$insert=$alanekle->execute(array(
	'ad' => $_POST['icerik_ad'],
	'ozet' => $_POST['icerik_ozet'],
	'detay' => $_POST['icerik_detay'],
	'keywords' => $_POST['icerik_keywords'],
	'kategori_id' => $_POST['icerik_kategori_id'],
	'resimyol' => $resim_yolu,
	'zaman' => $zaman
	));
	if ($insert)
	{
		header("location: ../blog.php?durum=eklendi");
	}
	else
	{
		header("location: ../blog.php?durum=eklenemedi");
	}
}

if (isset($_POST['slider-ekle']))
{
	$uploads='../../resimler/slider';
	$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
	$name=$_FILES['slider_resimyol']["name"];

	$benzersizsayi1=rand(20000,40000);
	$benzersizsayi2=rand(20000,40000);
	$benzersizsayi3=rand(20000,40000);
	$benzersizsayi4=rand(20000,40000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$yeniekle=$db->prepare("INSERT INTO slider SET 
	slider_ad=:ad,	
	slider_link=:link,
	slider_sira=:sira,
	slider_durum=:durum,
	slider_resimyol=:resimyol
	");

	$insert=$yeniekle->execute(array(
	'ad' => $_POST['slider_ad'],
	'link' => $_POST['slider_link'],
	'sira' => $_POST['slider_sira'],
	'durum' => $_POST['slider_durum'],
	'resimyol' => $resim_yolu
	));
	if ($insert)
	{
		header("location: ../slider.php?durum=eklendi");
	}
	else
	{
		header("location: ../slider.php?durum=eklenemedi");
	}
}


 ?>