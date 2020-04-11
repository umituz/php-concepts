<?php 
ob_start();
session_start();
include 'baglan.php';

if (isset($_POST['giris']))
{
	$yonetmen_ad=$_POST['yonetmen_ad'];
	$yonetmen_sifre=md5($_POST['yonetmen_sifre']);	

	if ($yonetmen_ad && $yonetmen_sifre)
	{
		$yonetmensor=$db->prepare("SELECT * FROM yonetmen Where yonetmen_ad=:yonetmen_ad AND yonetmen_sifre=:yonetmen_sifre");
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

?>