<?php 
include 'baglan.php';

if (isset($_POST['hakkimda-duzenle']))
{
	$ayarduzenle=$db->prepare("UPDATE hakkimda SET 
	hakkimda_ad=:ad,	
	hakkimda_detay=:detay
	WHERE hakkimda_id=0
	");
	$update=$ayarduzenle->execute(array(
	'ad' => $_POST['hakkimda_ad'],
	'detay' => $_POST['hakkimda_detay']
	));
	if ($update)
	{
		header("location: ../hakkimda.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../hakkimda.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['genelayar-duzenle']))
{
	$ayarduzenle=$db->prepare("UPDATE ayarlar SET 
	ayar_siteurl=:siteurl,	
	ayar_title=:title,
	ayar_description=:description,
	ayar_keywords=:keywords
	WHERE ayar_id=0
	");
	$update=$ayarduzenle->execute(array(
	'siteurl' => $_POST['ayar_siteurl'],
	'title' => $_POST['ayar_title'],
	'description' => $_POST['ayar_description'],
	'keywords' => $_POST['ayar_keywords']		
	));
	if ($update)
	{
		header("location: ../genel-ayarlar.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../genel-ayarlar.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['iletisim-duzenle']))
{
	$ayarduzenle=$db->prepare("UPDATE ayarlar SET 
	ayar_tel=:tel,	
	ayar_gsm=:gsm,
	ayar_faks=:faks,
	ayar_mail=:mail,
	ayar_adres=:adres,	
	ayar_il=:il,
	ayar_ilce=:ilce
	WHERE ayar_id=0
	");
	$update=$ayarduzenle->execute(array(
	'tel' => $_POST['ayar_tel'],
	'gsm' => $_POST['ayar_gsm'],
	'faks' => $_POST['ayar_faks'],
	'mail' => $_POST['ayar_mail'],
	'adres' => $_POST['ayar_adres'],
	'il' => $_POST['ayar_il'],
	'ilce' => $_POST['ayar_ilce']	
	));
	if ($update)
	{
		header("location: ../iletisim-ayarlar.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../iletisim-ayarlar.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['api-duzenle']))
{
	$ayarduzenle=$db->prepare("UPDATE ayarlar SET 
	ayar_recaptcha=:recaptcha,	
	ayar_googlemap=:googlemap,
	ayar_analytsic=:analytsic
	WHERE ayar_id=0
	");
	$update=$ayarduzenle->execute(array(
	'recaptcha' => $_POST['ayar_recaptcha'],
	'googlemap' => $_POST['ayar_googlemap'],
	'analytsic' => $_POST['ayar_analytsic']		
	));
	if ($update)
	{
		header("location: ../api-ayarlar.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../api-ayarlar.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['sosyalmedya-duzenle']))
{
	$ayarduzenle=$db->prepare("UPDATE ayarlar SET 
	ayar_facebook=:facebook,	
	ayar_twitter=:twitter,
	ayar_youtube=:youtube,
	ayar_google=:google
	WHERE ayar_id=0
	");
	$update=$ayarduzenle->execute(array(
	'facebook' => $_POST['ayar_facebook'],
	'twitter' => $_POST['ayar_twitter'],
	'youtube' => $_POST['ayar_youtube'],
	'google' => $_POST['ayar_google']		
	));
	if ($update)
	{
		header("location: ../sosyalmedya-ayarlar.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../sosyalmedya-ayarlar.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['mail-duzenle']))
{
	$ayarduzenle=$db->prepare("UPDATE ayarlar SET 
	ayar_smtphost=:smtphost,	
	ayar_smtpuser=:smtpuser,
	ayar_smtppassword=:smtppassword,
	ayar_smtpport=:smtpport
	WHERE ayar_id=0
	");
	$update=$ayarduzenle->execute(array(
	'smtphost' => $_POST['ayar_smtphost'],
	'smtpuser' => $_POST['ayar_smtpuser'],
	'smtppassword' => $_POST['ayar_smtppassword'],
	'smtpport' => $_POST['ayar_smtpport']		
	));
	if ($update)
	{
		header("location: ../mail-ayarlar.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../mail-ayarlar.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['blog-duzenle']))
{
	if ($_FILES['icerik_resimyol']['size'] > 0)
	{
		$uploads='../../resimler/kisiselblog';
		$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
		$name=$_FILES['icerik_resimyol']["name"];

		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;

		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		$alanduzenle=$db->prepare("UPDATE icerik SET 
		icerik_ad=:ad,
		icerik_ozet=:ozet,	
		icerik_detay=:detay,
		icerik_keywords=:keywords,
		icerik_durum=:durum,
		icerik_resimyol=:resimyol
		WHERE icerik_id={$_POST['icerik_id']}
		");
		$update=$alanduzenle->execute(array(
		'ad' => $_POST['icerik_ad'],
		'ozet' => $_POST['icerik_ozet'],
		'detay' => $_POST['icerik_detay']	,
		'keywords' => $_POST['icerik_keywords'],
		'durum' => $_POST['icerik_durum'],
		'resimyol' => $resim_yolu			
		));

		$icerik_id=$_POST['icerik_id'];		

		if ($update)
		{
			$resimsil=$_POST['icerik_resimyol'];
			unlink("../../resimler/kisiselblog/$resimsil");

			header("location: ../blog-duzenle.php?icerik_id=$icerik_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../blog-duzenle.php?icerik_id=$icerik_id&durum=duzenlenemedi");
		}

	}
	else
	{
		

		$alanduzenle=$db->prepare("UPDATE icerik SET 
		icerik_ad=:ad,
		icerik_ozet=:ozet,	
		icerik_detay=:detay,
		icerik_keywords=:keywords,
		icerik_kategori_id=:kategori_id,
		icerik_durum=:durum
		WHERE icerik_id={$_POST['icerik_id']}
		");
		$update=$alanduzenle->execute(array(
		'ad' => $_POST['icerik_ad'],
		'ozet' => $_POST['icerik_ozet'],
		'detay' => $_POST['icerik_detay'],
		'keywords' => $_POST['icerik_keywords'],
		'kategori_id' => $_POST['icerik_kategori_id'],
		'durum' => $_POST['icerik_durum']		
		));

		$icerik_id=$_POST['icerik_id'];

		if ($update)
		{
			header("location: ../blog-duzenle.php?icerik_id=$icerik_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../blog-duzenle.php?icerik_id=$icerik_id&durum=duzenlenemedi");
		}
	}	

}


if (isset($_POST['profil-duzenle']))
{
	if ($_FILES['yonetmen_resimyol']['size'] > 0)
	{
		$uploads='../resimler/yonetmen';
		$tmp_name=$_FILES['yonetmen_resimyol']["tmp_name"];
		$name=$_FILES['yonetmen_resimyol']["name"];

		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;

		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		$yonetmen_id=$_POST['yonetmen_id'];
		$md5sifre=md5($_POST['yonetmen_sifre']);

		$alanduzenle=$db->prepare("UPDATE yonetmen SET 
		yonetmen_adsoyad=:adsoyad,
		yonetmen_sifre=:sifre,
		yonetmen_resimyol=:resimyol

		WHERE yonetmen_id={$_POST['yonetmen_id']}
		");
		$update=$alanduzenle->execute(array(
		'adsoyad' => $_POST['yonetmen_adsoyad'],
		'sifre' => $md5sifre,
		'resimyol' => $resim_yolu			
		));

		if ($update)
		{
			$resimsil=$_POST['yonetmen_resimyol'];
			unlink("../resimler/yonetmen/$resimsil");

			header("location: ../profil-ayarlar.php?yonetmen_id=$yonetmen_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../profil-ayarlar.php?yonetmen_id=$yonetmen_id&durum=duzenlenemedi");
		}

	}
	else
	{
		$yonetmen_id=$_POST['yonetmen_id'];
		$md5sifre=md5($_POST['yonetmen_sifre']);

		$alanduzenle=$db->prepare("UPDATE yonetmen SET 
		yonetmen_adsoyad=:adsoyad,	
		yonetmen_sifre=:sifre
		WHERE yonetmen_id={$_POST['yonetmen_id']}
		");
		$update=$alanduzenle->execute(array(
		'adsoyad' => $_POST['yonetmen_adsoyad'],
		'sifre' => $md5sifre,	
		));

		if ($update)
		{
			header("location: ../profil-ayarlar.php?yonetmen_id=$yonetmen_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../profil-ayarlar.php?yonetmen_id=$yonetmen_id&durum=duzenlenemedi");
		}
	}	

}

if (isset($_POST['slider-duzenle']))
{
	if ($_FILES['slider_resimyol']['size'] > 0)
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

		$slider_id=$_POST['slider_id'];

		$alanduzenle=$db->prepare("UPDATE slider SET 
		slider_ad=:ad,	
		slider_link=:link,
		slider_sira=:sira,
		slider_durum=:durum,
		slider_resimyol=:resimyol
		WHERE slider_id={$_POST['slider_id']}
		");
		$update=$alanduzenle->execute(array(
		'ad' => $_POST['slider_ad'],
		'link' => $_POST['slider_link']	,
		'sira' => $_POST['slider_sira'],
		'durum' => $_POST['slider_durum'],
		'resimyol' => $resim_yolu			
		));

		if ($update)
		{
			$resimsil=$_POST['slider_resimyol'];
			unlink("../../resimler/slider/$resimsil");

			header("location: ../slider-duzenle.php?slider_id=$slider_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../slider-duzenle.php?slider_id=$slider_id&durum=duzenlenemedi");
		}

	}
	else
	{
		$slider_id=$_POST['slider_id'];

		$alanduzenle=$db->prepare("UPDATE slider SET 
		slider_ad=:ad,	
		slider_link=:link,
		slider_sira=:sira,
		slider_durum=:durum
		WHERE slider_id={$_POST['slider_id']}
		");
		$update=$alanduzenle->execute(array(
		'ad' => $_POST['slider_ad'],
		'link' => $_POST['slider_link']	,
		'sira' => $_POST['slider_sira'],
		'durum' => $_POST['slider_durum']		
		));

		if ($update)
		{
			header("location: ../slider-duzenle.php?slider_id=$slider_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../slider-duzenle.php?slider_id=$slider_id&durum=duzenlenemedi");
		}
	}	

}


 ?>