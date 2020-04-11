<?php 
ob_start();
include 'baglan.php';
include '../fonksiyonlar/seo.php';

if ($_GET['slidersil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM slider where slider_id=:slider_id");
	$delete=$sil->execute(array(
		'slider_id' => $_GET['slider_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['slider_resimyol'];
		unlink("../upload/resim/slider/$resimsil");

		header("location: ../slider.php?durum=silindi");
	}
	else
	{
		header("location: ../slider.php?durum=silinemedi");
	}
}

if ($_GET['referanssil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM referans where referans_id=:referans_id");
	$delete=$sil->execute(array(
		'referans_id' => $_GET['referans_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['referans_resimyol'];
		unlink("../upload/resim/referans/$resimsil");

		header("location: ../referans.php?durum=silindi");
	}
	else
	{
		header("location: ../referans.php?durum=silinemedi");
	}
}

if ($_GET['iceriksil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM icerik WHERE icerik_id=:icerik_id");
	$delete=$sil->execute(array(
		'icerik_id' => $_GET['icerik_id']	
		));
	
	$icerik_id=$_GET['icerik_id'];

	if ($delete)
	{
		$resimsil=$_GET['icerik_resimyol'];
		unlink("../dosyalar/resimler/icerik/$resimsil");

		$degersor=$db->prepare("DELETE FROM ilave_alan_degerler WHERE deger_icerik_id=:icerik_id");
		$degersor->execute(array(
			'icerik_id' => $icerik_id
			));

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

if ($_GET['altmenusil']=="silindi")
{
	$altmenu_id=$_GET["altmenu_id"];
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

if ($_GET['galerisil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM galeri where galeri_id=:galeri_id");
	$delete=$sil->execute(array(
		'galeri_id' => $_GET['galeri_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['galeri_resimyol'];
		unlink("../../dosyalar/resimler/galeri/$resimsil");

		header("location: ../galeri.php?durum=silindi");
	}
	else
	{
		header("location: ../galeri.php?durum=silinemedi");
	}
}

if ($_GET['yonetmensil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM yonetmen where yonetmen_id=:yonetmen_id");
	$delete=$sil->execute(array(
		'yonetmen_id' => $_GET['yonetmen_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['yonetmen_resimyol'];
		unlink("../dosyalar/resimler/yonetmen/$resimsil");

		header("location: ../yoneticiler.php?durum=silindi");
	}
	else
	{
		header("location: ../yoneticiler.php?durum=silinemedi");
	}
}

if ($_GET['yorumsil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM yorum WHERE yorum_id=:yorum_id");
	$delete=$sil->execute(array(
		'yorum_id' => $_GET['yorum_id']	
		));

	if ($delete)
	{
		header("location: ../yorum.php?durum=silindi");
	}
	else
	{
		header("location: ../yorum.php?durum=silinemedi");
	}
}

if ($_GET['kategorisil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM kategoriler WHERE kategori_id=:kategori_id");
	$delete=$sil->execute(array(
		'kategori_id' => $_GET['kategori_id']	
		));

	if ($delete)
	{
		header("location: ../kategoriler.php?durum=silindi");
	}
	else
	{
		header("location: ../kategoriler.php?durum=silinemedi");
	}
}

if ($_GET['uyesil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM uyeler WHERE uye_id=:uye_id");
	$delete=$sil->execute(array(
		'uye_id' => $_GET['uye_id']	
		));

	if ($delete)
	{
		header("location: ../uyeler.php?durum=silindi");
	}
	else
	{
		header("location: ../uyeler.php?durum=silinemedi");
	}
}

if ($_GET['alansil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM ilave_alanlar WHERE alan_id=:alan_id");
	$delete=$sil->execute(array(
		'alan_id' => $_GET['alan_id']	
		));

	if ($delete)
	{
		header("location: ../ilave_alanlar.php?durum=silindi");
	}
	else
	{
		header("location: ../ilave_alanlar.php?durum=silinemedi");
	}
}

if ($_GET['sayfasil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM sayfalar where sayfa_id=:sayfa_id");
	$delete=$sil->execute(array(
		'sayfa_id' => $_GET['sayfa_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['sayfa_resimyol'];
		unlink("../upload/resim/sayfa/$resimsil");
		header("location: ../sayfa.php?durum=silindi");
	}
	else
	{
		header("location: ../sayfa.php?durum=silinemedi");
	}
}

if ($_GET['reklamsil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM reklam WHERE reklam_id=:reklam_id");
	$delete=$sil->execute(array(
		'reklam_id' => $_GET['reklam_id']	
		));

	if ($delete)
	{
		$resimsil=$_GET['reklam_resimyol'];
		unlink("../dosyalar/resimler/reklam/$resimsil");
		header("location: ../reklam.php?durum=silindi");
	}
	else
	{
		header("location: ../reklam.php?durum=silinemedi");
	}
}

if ($_GET['dosyasil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM dosya where dosya_id=:dosya_id");
	$delete=$sil->execute(array(
		'dosya_id' => $_GET['dosya_id']	
		));

	if ($delete)
	{
		$dosyasil=$_GET['dosya_konum'];
		unlink("../dosyalar/dosya/$dosyasil");

		header("location: ../dosya.php?durum=silindi");
	}
	else
	{
		header("location: ../dosya.php?durum=silinemedi");
	}
}

if ($_GET['derssil']=="silindi")
{
	$sil=$db->prepare("DELETE FROM ders where ders_id=:ders_id");
	$delete=$sil->execute(array(
		'ders_id' => $_GET['ders_id']	
		));

	if ($delete)
	{
		$videosil=$_GET['ders_video'];
		unlink("../upload/video/ders/$videosil");

		header("location: ../ders.php?durum=silindi");
	}
	else
	{
		header("location: ../ders.php?durum=silinemedi");
	}
}

?>