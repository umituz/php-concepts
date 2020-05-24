<?php 
include 'baglan.php';

if ($_GET['iceriksil']=="silindi")
{
	$alansil=$db->prepare("DELETE FROM icerik where icerik_id=:icerik_id");
	$delete=$alansil->execute(array(
	'icerik_id' => $_GET['icerik_id']	
	));

	if ($delete)
	{
		$resimsil=$_GET['icerik_resimyol'];
		unlink("../../resimler/icerik/$resimsil");

		header("location: ../blog.php?durum=silindi");
	}
	else
	{
		header("location: ../blog.php?durum=silinemedi");
	}
}

if ($_GET['slidersil']=="silindi")
{
	$alansil=$db->prepare("DELETE FROM slider where slider_id=:slider_id");
	$delete=$alansil->execute(array(
	'slider_id' => $_GET['slider_id']	
	));

	if ($delete)
	{
		$resimsil=$_GET['slider_resimyol'];
		unlink("../../resimler/slider/$resimsil");

		header("location: ../slider.php?durum=silindi");
	}
	else
	{
		header("location: ../slider.php?durum=silinemedi");
	}
}

 ?>