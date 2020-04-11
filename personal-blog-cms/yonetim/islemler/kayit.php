<?php 

include 'baglan.php';
include '../fonksiyonlar/seo.php';

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



?>