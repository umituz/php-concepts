<?php 
ob_start();
include 'baglan.php';

if ($_GET['slidersil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM slider where slider_id=:slider_id");
	$delete=$sil->execute(array(
		'slider_id' => $_GET['slider_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['slider_resimyol'];
		unlink("../../dosyalar/resimler/slider/$resimsil");

		header("location: ../slider.php?durum=silindi");
	}
	else
	{
		header("location: ../slider.php?durum=silinemedi");
	}
}

if ($_GET['iceriksil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM icerik where icerik_id=:icerik_id");
	$delete=$sil->execute(array(
		'icerik_id' => $_GET['icerik_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['icerik_resimyol'];
		unlink("../../dosyalar/resimler/icerik/$resimsil");

		header("location: ../icerik.php?durum=silindi");
	}
	else
	{
		header("location: ../icerik.php?durum=silinemedi");
	}
}

if ($_GET['menusil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM menu where menu_id=:menu_id");
	$delete=$sil->execute(array(
		'menu_id' => $_GET['menu_id']	
		));

	if ($delete)
	{
		header("location: ../menu.php?durum=silindi");
	}
	else
	{
		header("location: ../menu.php?durum=silinemedi");
	}
}

if ($_GET['emlaksil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM emlak where emlak_id=:emlak_id");
	$delete=$sil->execute(array(
		'emlak_id' => $_GET['emlak_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['emlak_resimyol'];
		unlink("../../dosyalar/resimler/emlak/$resimsil");

		header("location: ../emlak.php?durum=silindi");
	}
	else
	{
		header("location: ../emlak.php?durum=silinemedi");
	}
}

if ($_GET['danismansil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM yonetmen where yonetmen_id=:yonetmen_id");
	$delete=$sil->execute(array(
		'yonetmen_id' => $_GET['yonetmen_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['yonetmen_resimyol'];
		unlink("../dosyalar/resimler/yonetmen/$resimsil");

		header("location: ../danisman.php?durum=silindi");
	}
	else
	{
		header("location: ../danisman.php?durum=silinemedi");
	}
}

if ($_GET['altmenusil']=="silindi")
{
	$altmenu_id=$altmenucek['menu_id'];
	$sil=$db->prepare("DELETE FROM menu where menu_id=:altmenu_id");
	$delete=$sil->execute(array(
		'altmenu_id' => $altmenu_id
		));

	if ($delete)
	{
		header("location: ../menu.php?durum=silindi");
	}
	else
	{
		header("location: ../menu.php?durum=silinemedi");
	}
}

?>