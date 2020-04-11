<?php 
ob_start();
include 'baglan.php';

if (isset($_POST['slider-ekle']))
{
	$uploads='../../dosyalar/resimler/slider';
	$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
	$name=$_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizsayi3=rand(30000,40000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$ekle=$db->prepare("INSERT INTO slider SET 
		slider_ad=:ad,	
		slider_link=:link,
		slider_sira=:sira,
		slider_durum=:durum,
		slider_resimyol=:resimyol");
	$insert=$ekle->execute(array(
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

if (isset($_POST['icerik-ekle']))
{
	$uploads='../../dosyalar/resimler/icerik';
	$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
	$name=$_FILES['icerik_resimyol']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$tarih=$_POST['icerik_tarih'];
	$saat=$_POST['icerik_saat'];
	$zaman=$tarih." ".$saat;

	$ekle=$db->prepare("INSERT INTO icerik SET 
		icerik_ad=:ad,
		icerik_detay=:detay,
		icerik_keywords=:keywords,
		icerik_durum=:durum,
		icerik_resimyol=:resimyol,
		icerik_zaman=:zaman
		");

	$insert=$ekle->execute(array(
		'ad' => $_POST['icerik_ad'],
		'detay' => $_POST['icerik_detay'],
		'keywords' => $_POST['icerik_keywords'],
		'durum' => $_POST['icerik_durum'],
		'resimyol' => $resim_yolu,
		'zaman' => $zaman
		));
	if ($insert)
	{
		header("location: ../icerik.php?durum=eklendi");
	}
	else
	{
		header("location: ../icerik.php?durum=eklenemedi");
	}
}

if (isset($_POST['menu-ekle']))
{
	$ekle=$db->prepare("INSERT INTO menu SET 
		menu_ust=:ust,
		menu_ad=:ad,
		menu_link=:link,
		menu_detay=:detay,	
		menu_sira=:sira,	
		menu_durum=:durum
		");

	$insert=$ekle->execute(array(
		'ust' => $_POST['menu_ust'],
		'ad' => $_POST['menu_ad'],
		'link' => $_POST['menu_link'],
		'detay' => $_POST['menu_detay'],
		'sira' => $_POST['menu_sira'],		
		'durum' => $_POST['menu_durum']
		));
	if ($insert)
	{
		header("location: ../menu.php?durum=eklendi");
	}
	else
	{
		header("location: ../menu.php?durum=eklenemedi");
	}
}

if (isset($_POST['emlak-ekle']))
{
	$uploads='../../dosyalar/resimler/emlak';
	$tmp_name=$_FILES['emlak_resimyol']["tmp_name"];
	$name=$_FILES['emlak_resimyol']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizsayi3=rand(30000,40000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$tarih=$_POST['emlak_tarih'];
	$saat=$_POST['emlak_saat'];
	$zaman=$tarih." ".$saat;

	$ekle=$db->prepare("INSERT INTO emlak SET 		
		emlak_ad=:ad,
		yonetmen_id=:id,
		emlak_detay=:detay,
		emlak_adres=:adres,
		emlak_fiyat=:fiyat,
		emlak_durum=:durum,
		emlak_resimyol=:resimyol,
		emlak_zaman=:zaman");
	$insert=$ekle->execute(array(		
		'ad' => $_POST['emlak_ad'],
		'id' => $_POST['yonetmen_id'],
		'detay' => $_POST['emlak_detay'],
		'adres' => $_POST['emlak_adres'],
		'fiyat' => $_POST['emlak_fiyat'],
		'durum' => $_POST['emlak_durum'],
		'resimyol' => $resim_yolu,
		'zaman' => $zaman
		));
	if ($insert)
	{
		header("location: ../emlak.php?durum=eklendi");
	}
	else
	{
		header("location: ../emlak.php?durum=eklenemedi");
	}
}

if (isset($_POST['danisman-ekle']))
{
	$uploads='../dosyalar/resimler/yonetmen';
	$tmp_name=$_FILES['yonetmen_resimyol']["tmp_name"];
	$name=$_FILES['yonetmen_resimyol']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$tarih=$_POST['yonetmen_tarih'];
	$saat=$_POST['yonetmen_saat'];
	$zaman=$tarih." ".$saat;

	$yonetmen_sifre=md5($_POST['yonetmen_sifre']);

	$ekle=$db->prepare("INSERT INTO yonetmen SET 
		yonetmen_ad=:ad,
		yonetmen_sifre=:sifre,
		yonetmen_adsoyad=:adsoyad,
		yonetmen_detay=:detay,
		yonetmen_tel=:tel,
		yonetmen_mail=:mail,
		yonetmen_durum=:durum,
		yonetmen_resimyol=:resimyol,
		yonetmen_zaman=:zaman
		");

	$insert=$ekle->execute(array(
		'ad' => $_POST['yonetmen_ad'],
		'sifre' => $yonetmen_sifre,
		'adsoyad' => $_POST['yonetmen_adsoyad'],
		'detay' => $_POST['yonetmen_detay'],
		'tel' => $_POST['yonetmen_tel'],
		'mail' => $_POST['yonetmen_mail'],
		'durum' => $_POST['yonetmen_durum'],
		'resimyol' => $resim_yolu,
		'zaman' => $zaman
		));
	if ($insert)
	{
		header("location: ../danisman.php?durum=eklendi");
	}
	else
	{
		header("location: ../danisman.php?durum=eklenemedi");
	}
}

if (!empty($_FILES))
{
	$uploads='../../dosyalar/resimler/galeri';
	$tmp_name=$_FILES['file']["tmp_name"];
	$name=$_FILES['file']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$ekle=$db->prepare("INSERT INTO galeri SET 	
		galeri_resimyol=:resimyol,
		galeri_emlak_id=:emlakid
		");

	$insert=$ekle->execute(array(
		'resimyol' => $resim_yolu,
		'emlakid' => $_POST["galeri_emlak_id"]
		));
}

?>