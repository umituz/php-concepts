<?php 
ob_start();
include 'baglan.php';
include '../fonksiyonlar/seo.php';

if (isset($_POST['slider-ekle']))
{
	$uploads='../upload/resim/slider';
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

if (isset($_POST['referans-ekle']))
{
	$uploads='../upload/resim/referans';
	$tmp_name=$_FILES['referans_resimyol']["tmp_name"];
	$name=$_FILES['referans_resimyol']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizsayi3=rand(30000,40000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$ekle=$db->prepare("INSERT INTO referans SET 
		referans_ad=:ad,	
		referans_detay=:detay,	
		referans_link=:link,
		referans_durum=:durum,
		referans_resimyol=:resimyol");
	$insert=$ekle->execute(array(
		'ad' => $_POST['referans_ad'],
		'detay' => $_POST['referans_detay'],
		'link' => $_POST['referans_link'],
		'durum' => $_POST['referans_durum'],
		'resimyol' => $resim_yolu
		));
	if ($insert)
	{
		header("location: ../referans.php?durum=eklendi");
	}
	else
	{
		header("location: ../referans.php?durum=eklenemedi");
	}
}

if (isset($_POST['icerik-ekle']))
{
	$uploads='../upload/resim/icerik';
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

	$icerik_link = seo($_POST["icerik_ad"]);

	$iceriksor=$db->prepare("SELECT * FROM icerik WHERE icerik_link=:icerik_link");
	$iceriksor->execute(array('icerik_link' => $icerik_link));
	$iceriksay=$iceriksor->rowCount();

	if ($iceriksay > 0) {
		header("location: ../icerik.php?durum=mevcut");
	}else {		
		$ekle=$db->prepare("INSERT INTO icerik SET 
			icerik_ad=:ad,
			icerik_link=:link,
			icerik_kategori=:kategori,
			icerik_detay=:detay,
			icerik_keywords=:keywords,
			icerik_durum=:durum,
			icerik_anasayfada_goster=:anasayfada_goster,
			icerik_resimyol=:resimyol,		
			icerik_zaman=:zaman
			");

		$insert=$ekle->execute(array(
			'ad' => $_POST['icerik_ad'],
			'link' => $icerik_link,
			'kategori' => $_POST['icerik_kategori'],
			'detay' => $_POST['icerik_detay'],			
			'keywords' => $_POST['icerik_keywords'],
			'durum' => $_POST['icerik_durum'],
			'anasayfada_goster' => $_POST['icerik_anasayfada_goster'],
			'resimyol' => $resim_yolu,
			'zaman' => $zaman
			));

		if ($insert)
		{
			$son_icerik_id = $db->lastinsertid();		
			$alansor=$db->prepare("SELECT * FROM ilave_alanlar");
			$alansor->execute();
			$alansay=$alansor->rowCount($alansor);
			if ($alansay > 0) {
				while ($alancek=$alansor->fetch(PDO::FETCH_ASSOC)){
					extract($alancek);
					if ($_POST["alan_".$alan_id]) {
						$deger = $_POST["alan_".$alan_id];
						$ekle=$db->prepare("INSERT INTO ilave_alan_degerler SET
							deger_alan_id =:alan_id,
							deger_detay=:detay,
							deger_icerik_id=:son_icerik_id	");
						$insert=$ekle->execute(array(
							'alan_id' => $alan_id,
							'detay' => $deger,
							'son_icerik_id' => $son_icerik_id
							));
					}
				}
			}
			header("location: ../icerik.php?durum=eklendi");
		}
		else
		{
			header("location: ../icerik.php?durum=eklenemedi");			
		}
	}
}



if (isset($_POST['menu-ekle']))
{
	$ekle=$db->prepare("INSERT INTO menu SET 
		menu_ust=:ust,
		menu_ad=:ad,
		menu_link=:link,
		menu_sira=:sira,	
		menu_durum=:durum
		");

	$insert=$ekle->execute(array(
		'ust' => $_POST['menu_ust'],
		'ad' => $_POST['menu_ad'],
		'link' => $_POST['menu_link'],
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

if (isset($_POST['yonetmen-ekle']))
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
		yonetmen_yetki=:yetki,
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
		'yetki' => $_POST['yonetmen_yetki'],
		'durum' => $_POST['yonetmen_durum'],
		'resimyol' => $resim_yolu,
		'zaman' => $zaman
		));
	if ($insert)
	{
		header("location: ../yoneticiler.php?durum=eklendi");
	}
	else
	{
		header("location: ../yoneticiler.php?durum=eklenemedi");
	}
}

if (isset($_POST['yorum-ekle']))
{
	$tarih=$_POST['yorum_tarih'];
	$saat=$_POST['yorum_saat'];
	$zaman=$tarih." ".$saat;

	$ekle=$db->prepare("INSERT INTO yorum SET 
		yorum_icerik_id=:icerik_id,
		yorum_ad=:ad,
		yorum_email=:email,
		yorum_detay=:detay,
		yorum_zaman=:zaman
		");

	$insert=$ekle->execute(array(
		'icerik_id' => $_POST['icerik_id'],
		'ad' => $_POST['yorum_ad'],
		'email' => $_POST['yorum_email'],
		'detay' => $_POST['yorum_detay'],
		'zaman' => $zaman
		));
	if ($insert)
	{
		header("location: ../../index.php");
	}
	else
	{
		header("location: ../../index.php");
	}
}

if (isset($_POST['kategori-ekle']))
{
	$tarih=$_POST['kategori_tarih'];
	$saat=$_POST['kategori_saat'];
	$zaman=$tarih." ".$saat;

	$kategori_ad = $_POST["kategori_ad"];
	$kategori_link=seo($kategori_ad);

	$kategorisor=$db->prepare("SELECT * FROM kategoriler WHERE kategori_link=:kategori_link");
	$kategorisor->execute(array('kategori_link' => $kategori_link));
	$kategorisay=$kategorisor->rowCount();
	if ($kategorisay > 0) {
		header("location: ../kategoriler.php?durum=mevcut");
	}else {
		$ekle=$db->prepare("INSERT INTO kategoriler SET 
			kategori_ad=:ad,
			kategori_link=:link,
			kategori_detay=:detay,
			kategori_keywords=:keywords,
			kategori_anasayfa_konu=:anasayfa_konu,
			kategori_full_konu=:full_konu,
			kategori_zaman=:zaman
			");

		$insert=$ekle->execute(array(
			'ad' => $_POST['kategori_ad'],
			'link' => $kategori_link,
			'detay' => $_POST['kategori_detay'],
			'keywords' => $_POST['kategori_keywords'],
			'anasayfa_konu' => $_POST['kategori_anasayfa_konu'],
			'full_konu' => $_POST['kategori_full_konu'],
			'zaman' => $zaman
			));
		if ($insert)
		{
			header("location: ../kategoriler.php?durum=eklendi");
		}
		else
		{
			header("location: ../kategoriler.php?durum=eklenemedi");
		}
	}
}

if (isset($_POST['uye-ekle']))
{
	$tarih=$_POST['uye_tarih'];
	$saat=$_POST['uye_saat'];
	$zaman=$tarih." ".$saat;
	
	$uye_ad = $_POST["uye_ad"];
	$uye_link=seo($uye_ad);
	$uye_sifre=md5($_POST['uye_sifre']);

	$uyesor=$db->prepare("SELECT * FROM uyeler WHERE uye_link=:uye_link");
	$uyesor->execute(array('uye_link' => $uye_link));
	$uyesay=$uyesor->rowCount();
	if ($uyesay > 0) {
		header("location: ../uyeler.php?durum=mevcut");
	}else {
		$ekle=$db->prepare("INSERT INTO uyeler SET 
			uye_ad=:ad,
			uye_link=:link,
			uye_sifre=:sifre,
			uye_detay=:detay,
			uye_mail=:mail,
			uye_cinsiyet=:cinsiyet,
			uye_durum=:durum,
			uye_zaman=:zaman
			");

		$insert=$ekle->execute(array(
			'ad' => $_POST['uye_ad'],
			'link' => $uye_link,
			'sifre' => $uye_sifre,
			'detay' => $_POST['uye_detay'],
			'mail' => $_POST['uye_mail'],
			'cinsiyet' => $_POST['uye_cinsiyet'],
			'durum' => $_POST['uye_durum'],
			'zaman' => $zaman
			));
		if ($insert)
		{
			header("location: ../uyeler.php?durum=eklendi");
		}
		else
		{
			header("location: ../uyeler.php?durum=eklenemedi");
		}
	}
}

if (isset($_POST['alan-ekle']))
{
	$tarih=$_POST['alan_tarih'];
	$saat=$_POST['alan_saat'];
	$zaman=$tarih." ".$saat;

	$alan_ad = $_POST["alan_ad"];

	$alansor=$db->prepare("SELECT * FROM ilave_alanlar WHERE alan_ad=:alan_ad");
	$alansor->execute(array('alan_ad' => $alan_ad));
	$alansay=$alansor->rowCount();
	if ($alansay > 0) {
		header("location: ../ilave_alanlar.php?durum=mevcut");
	}else {
		$ekle=$db->prepare("INSERT INTO ilave_alanlar SET 
			alan_ad=:ad,
			alan_tip=:tip,
			alan_zaman=:zaman
			");

		$insert=$ekle->execute(array(
			'ad' => $_POST['alan_ad'],
			'tip' => $_POST['alan_tip'],
			'zaman' => $zaman
			));
		if ($insert)
		{
			header("location: ../ilave_alanlar.php?durum=eklendi");
		}
		else
		{
			header("location: ../ilave_alanlar.php?durum=eklenemedi");
		}
	}
}

if (isset($_POST['sayfa-ekle']))
{
	$uploads='../upload/resim/sayfa';
	$tmp_name=$_FILES['sayfa_resimyol']["tmp_name"];
	$name=$_FILES['sayfa_resimyol']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizsayi3=rand(30000,40000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$tarih=$_POST['sayfa_tarih'];
	$saat=$_POST['sayfa_saat'];
	$zaman=$tarih." ".$saat;

	$sayfa_link = seo($_POST["sayfa_ad"]);

	$sayfasor=$db->prepare("SELECT * FROM sayfalar WHERE sayfa_link=:sayfa_link");
	$sayfasor->execute(array('sayfa_link' => $sayfa_link));
	$sayfasay=$sayfasor->rowCount();
	if ($sayfasay > 0) {
		header("Location: ../sayfa.php?durum=mevcut");
	}else {
		$ekle=$db->prepare("INSERT INTO sayfalar SET 
			sayfa_ad=:ad,
			sayfa_link=:link,
			sayfa_detay=:detay,		
			sayfa_durum=:durum,
			sayfa_resimyol=:resimyol,
			sayfa_zaman=:zaman
			");

		$insert=$ekle->execute(array(
			'ad' => $_POST['sayfa_ad'],
			'link' => $sayfa_link,
			'detay' => $_POST['sayfa_detay'],	
			'durum' => $_POST['sayfa_durum'],
			'resimyol' => $resim_yolu,
			'zaman' => $zaman
			));
	}
	if ($insert)
	{
		header("location: ../sayfa.php?durum=eklendi");
	}
	else
	{
		header("location: ../sayfa.php?durum=eklenemedi");
	}
}

if (isset($_POST['reklam-ekle']))
{
	$uploads='../dosyalar/resimler/reklam';
	$tmp_name=$_FILES['reklam_resimyol']["tmp_name"];
	$name=$_FILES['reklam_resimyol']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$tarih=$_POST['reklam_tarih'];
	$saat=$_POST['reklam_saat'];
	$zaman=$tarih." ".$saat;

	$reklam_ad = $_POST["reklam_ad"];

	$reklamsor=$db->prepare("SELECT * FROM reklam WHERE reklam_ad=:reklam_ad");
	$reklamsor->execute(array('reklam_ad' => $reklam_ad));
	$reklamsay=$reklamsor->rowCount();
	if ($reklamsay > 0) {
		header("location: ../reklam.php?durum=mevcut");
	}else {
		$ekle=$db->prepare("INSERT INTO reklam SET 
			reklam_ad=:ad,
			reklam_detay=:detay,
			reklam_durum=:durum,
			reklam_resimyol=:resimyol,
			reklam_zaman=:zaman
			");

		$insert=$ekle->execute(array(
			'ad' => $_POST['reklam_ad'],
			'detay' => $_POST['reklam_detay'],
			'durum' => $_POST['reklam_durum'],
			'resimyol' => $resim_yolu,
			'zaman' => $zaman
			));
		if ($insert)
		{
			header("location: ../reklam.php?durum=eklendi");
		}
		else
		{
			header("location: ../reklam.php?durum=eklenemedi");
		}
	}
}

if (isset($_POST['dosya-ekle']))
{
	$uploads='../dosyalar/dosya';
	$tmp_name=$_FILES['dosya_konum']["tmp_name"];
	$name=$_FILES['dosya_konum']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$dosya_konum=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$tarih=$_POST['dosya_tarih'];
	$saat=$_POST['dosya_saat'];
	$zaman=$tarih." ".$saat;

	$dosya_ad=seo($_POST['dosya_ad']);

	$dosyasor=$db->prepare("SELECT * FROM dosya WHERE dosya_ad=:dosya_ad");
	$dosyasor->execute(array('dosya_ad' => $dosya_ad));
	$dosyasay=$dosyasor->rowCount();
	if ($dosyasay > 0) {
		header("location: ../dosya.php?durum=mevcut");
	}else {
		$ekle=$db->prepare("INSERT INTO dosya SET 
			dosya_ad=:ad,
			dosya_detay=:detay,
			dosya_konum=:konum,
			dosya_zaman=:zaman
			");

		$insert=$ekle->execute(array(
			'ad' => $dosya_ad,
			'detay' => $_POST['dosya_detay'],
			'konum' => $dosya_konum,
			'zaman' => $zaman
			));
		if ($insert)
		{
			header("location: ../dosya.php?durum=eklendi");
		}
		else
		{
			header("location: ../dosya.php?durum=eklenemedi");
		}
	}
}

if (isset($_POST['ders-ekle']))
{
	$uploads='../upload/video/ders';
	$tmp_name=$_FILES['ders_video']["tmp_name"];
	$name=$_FILES['ders_video']["name"];
	$benzersizsayi1=rand(10000,90000);
	$benzersizsayi2=rand(20000,50000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$ders_video=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$ders_ad = $_POST["ders_ad"];
	$ders_link=seo($ders_ad);

	$derssor=$db->prepare("SELECT * FROM ders WHERE ders_ad=:ders_ad");
	$derssor->execute(array('ders_ad' => $ders_ad));
	$derssay=$derssor->rowCount();
	if ($derssay > 0) {
		header("location: ../ders.php?durum=mevcut");
	}else {
		$ekle=$db->prepare("INSERT INTO ders SET 
			ders_ad=:ad,
			ders_link=:link,
			ders_detay=:detay,
			ders_kategori=:kategori,
			ders_keywords=:keywords,
			ders_durum=:durum,
			ders_video=:video
			");

		$insert=$ekle->execute(array(
			'ad' => $_POST['ders_ad'],
			'link' => $ders_link,
			'detay' => $_POST['ders_detay'],
			'kategori' => $_POST['ders_kategori'],
			'keywords' => $_POST['ders_keywords'],
			'durum' => $_POST['ders_durum'],
			'video' => $ders_video
			));
		if ($insert)
		{
			header("location: ../ders.php?durum=eklendi");
		}
		else
		{
			header("location: ../ders.php?durum=eklenemedi");
		}
	}	
}



?>