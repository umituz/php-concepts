<?php 
session_start();
ob_start();
include 'baglan.php';

if (isset($_POST['giris']))
{
	$yonetmen_ad=$_POST['yonetmen_ad'];
	$yonetmen_sifre=md5($_POST['yonetmen_sifre']);	

	if (!$yonetmen_ad && !$yonetmen_sifre) {
		header("location: ../giris.php?durum=bos");
	}

	if ($yonetmen_ad && $yonetmen_sifre)
	{
		$yonetmensor=$db->prepare("SELECT * FROM yonetmen WHERE yonetmen_ad=:yonetmen_ad && yonetmen_sifre=:yonetmen_sifre");
		$yonetmensor->execute(array(
			'yonetmen_ad' => $yonetmen_ad,
			'yonetmen_sifre' => $yonetmen_sifre
			));
		$say=$yonetmensor->rowCount();

		if ($say>0)
		{
			$_SESSION['yonetmen_ad'] = $yonetmen_ad;
			header("location: ../index.php");
		}
		else
		{
			header("location: ../giris.php?durum=girisyok");
		}

	}

}

if (isset($_POST['uye-giris']))
{
	$uye_ad=$_POST['uye_ad'];
	$uye_sifre=md5($_POST['uye_sifre']);	

	if (!$uye_ad && !$uye_sifre) {
		header("location: ../../giris.php?durum=bos");
	}

	if ($uye_ad && $uye_sifre)
	{
		$uyesor=$db->prepare("SELECT * FROM uyeler WHERE uye_ad=:uye_ad && uye_sifre=:uye_sifre");
		$uyesor->execute(array(
			'uye_ad' => $uye_ad,
			'uye_sifre' => $uye_sifre
			));
		$say=$uyesor->rowCount();

		if ($say>0)
		{
			$_SESSION['uye_ad'] = $uye_ad;
			header("location: ../../profil.php?durum=ok");
		}
		else
		{
			header("location: ../../giris.php?durum=girisyok");
		}

	}

}

if (isset($_POST['sosyal-giris']))
{	
	$uye_mail=$_POST['uye_mail'];
	$beni_hatirla=$_POST['beni_hatirla'];
	$uye_sifre=md5($_POST['uye_sifre']);	
	$aktivasyon = 1;

	if (!$uye_mail && !$uye_sifre) {
		header("location: ../../index.php?durum=bos");
	}

	if ($uye_mail && $uye_sifre)
	{
		$uyesor=$db->prepare("SELECT * FROM uye WHERE uye_mail=:uye_mail && uye_sifre=:uye_sifre && uye_mail_aktivasyon=:aktivasyon");
		$uyesor->execute(array(
			'uye_mail' => $uye_mail,
			'uye_sifre' => $uye_sifre,
			'aktivasyon' => $aktivasyon
			));
		$say=$uyesor->rowCount();
		$uyecek=$uyesor->fetch(PDO::FETCH_ASSOC);
		extract($uyecek);
		if ($say>0)
		{
			$_SESSION["login"] = true;
			$_SESSION["uye_session_id"] = $uye_id;
			$_SESSION["uye_mail"] = $uye_mail;

			$tarih=$_POST['giris_tarih'];
			$saat=$_POST['giris_saat'];
			$zaman=$tarih." ".$saat;

			$songiris_guncelle = $db->prepare("UPDATE uye SET uye_sonzaman=:sonzaman WHERE uye_id={$uye_id}");
			$songiris_guncelle->execute(array('sonzaman' => $zaman));	

			if ($beni_hatirla == "yes") {
				setcookie('idCookie', '', time()+60*60*24*100,"/");
				setcookie('sifreCookie', '', time()+60*60*24*100,"/");
			}	

			header("location: ../../index.php");
		}
		else
		{
			header("location: ../../index.php?durum=girisyok");
		}

	}

}

?>