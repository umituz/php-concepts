<?php 
ob_start();
include 'baglan.php';

if (isset($_POST['genelayar-duzenle']))
{
	$duzenle=$db->prepare("UPDATE ayar SET 
		ayar_siteurl=:siteurl,	
		ayar_title=:title,
		ayar_description=:description,
		ayar_keywords=:keywords,
		ayar_footer=:footer,
		ayar_slider=:slider
		WHERE ayar_id=0
		");
	$update=$duzenle->execute(array(
		'siteurl' => $_POST['ayar_siteurl'],
		'title' => $_POST['ayar_title'],
		'description' => $_POST['ayar_description'],
		'keywords' => $_POST['ayar_keywords'],
		'footer' => $_POST['ayar_footer'],
		'slider' => $_POST['ayar_slider']		
		));
	if ($update)
	{
		header("location: ../genel.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../genel.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['iletisim-duzenle']))
{
	$duzenle=$db->prepare("UPDATE iletisim SET 
		iletisim_tel=:tel,	
		iletisim_gsm=:gsm,
		iletisim_faks=:faks,
		iletisim_mail=:mail,
		iletisim_adres=:adres,	
		iletisim_ilce=:ilce,
		iletisim_il=:il,
		iletisim_mesai=:mesai
		WHERE iletisim_id=0
		");
	$update=$duzenle->execute(array(
		'tel' => $_POST['iletisim_tel'],
		'gsm' => $_POST['iletisim_gsm'],
		'faks' => $_POST['iletisim_faks'],
		'mail' => $_POST['iletisim_mail'],
		'adres' => $_POST['iletisim_adres'],
		'ilce' => $_POST['iletisim_ilce'],
		'il' => $_POST['iletisim_il'],
		'mesai' => $_POST['iletisim_mesai']	
		));
	if ($update)
	{
		header("location: ../iletisim.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../iletisim.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['api-duzenle']))
{
	$duzenle=$db->prepare("UPDATE api SET 
		api_recapctha=:recapctha,	
		api_googlemap=:googlemap,
		api_analystic=:analytsic
		WHERE api_id=0
		");
	$update=$duzenle->execute(array(
		'recapctha' => $_POST['api_recapctha'],
		'googlemap' => $_POST['api_googlemap'],
		'analytsic' => $_POST['api_analystic']		
		));
	if ($update)
	{
		header("location: ../api.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../api.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['sosyalmedya-duzenle']))
{
	$ayarduzenle=$db->prepare("UPDATE sosyal SET 
		sosyal_facebook=:facebook,	
		sosyal_instagram=:instagram,
		sosyal_twitter=:twitter,
		sosyal_google=:google,
		sosyal_youtube=:youtube,
		sosyal_linkedin=:linkedin,
		sosyal_github=:github	
		WHERE sosyal_id=0
		");
	$update=$ayarduzenle->execute(array(
		'facebook' => $_POST['sosyal_facebook'],
		'instagram' => $_POST['sosyal_instagram'],
		'twitter' => $_POST['sosyal_twitter'],
		'google' => $_POST['sosyal_google'],
		'youtube' => $_POST['sosyal_youtube'],
		'linkedin' => $_POST['sosyal_linkedin'],
		'github' => $_POST['sosyal_github']

		));
	if ($update)
	{
		header("location: ../sosyal.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../sosyal.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['mail-duzenle']))
{
	$ayarduzenle=$db->prepare("UPDATE mail SET 
		mail_sunucu=:sunucu,	
		mail_kullanici=:kullanici,
		mail_sifre=:sifre,
		mail_port=:port
		WHERE mail_id=0
		");
	$update=$ayarduzenle->execute(array(
		'sunucu' => $_POST['mail_sunucu'],
		'kullanici' => $_POST['mail_kullanici'],
		'sifre' => $_POST['mail_sifre'],
		'port' => $_POST['mail_port']		
		));
	if ($update)
	{
		header("location: ../mail.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../mail.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['hakkimizda-duzenle']))
{
	$duzenle=$db->prepare("UPDATE hakkimizda SET 
		hakkimizda_baslik=:baslik,	
		hakkimizda_detay=:detay,
		hakkimizda_video=:video,
		hakkimizda_vizyon=:vizyon,
		hakkimizda_misyon=:misyon		
		WHERE hakkimizda_id=0
		");
	$update=$duzenle->execute(array(
		'baslik' => $_POST['hakkimizda_baslik'],
		'detay' => $_POST['hakkimizda_detay'],
		'video' => $_POST['hakkimizda_video'],
		'vizyon' => $_POST['hakkimizda_vizyon'],
		'misyon' => $_POST['hakkimizda_misyon']
		));
	if ($update)
	{
		header("location: ../hakkimizda.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../hakkimizda.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['slider-duzenle']))
{
	if ($_FILES['slider_resimyol']['size'] > 0)
	{
		$uploads='../../dosyalar/resimler/slider';
		$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
		$name=$_FILES['slider_resimyol']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizsayi3=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		$slider_id=$_POST['slider_id'];

		$duzenle=$db->prepare("UPDATE slider SET 
			slider_ad=:ad,	
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_resimyol=:resimyol
			WHERE slider_id={$_POST['slider_id']}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'link' => $_POST['slider_link']	,
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum'],
			'resimyol' => $resim_yolu			
			));

		if ($update)
		{
			$resimsil=$_POST['slider_resimyol'];
			unlink("../../dosyalar/resimler/slider/$resimsil");

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

		$duzenle=$db->prepare("UPDATE slider SET 
			slider_ad=:ad,	
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum
			WHERE slider_id={$_POST['slider_id']}
			");
		$update=$duzenle->execute(array(
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

if (isset($_POST['icerik-duzenle']))
{
	if ($_FILES['icerik_resimyol']['size'] > 0)
	{
		$uploads='../../dosyalar/resimler/icerik';
		$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
		$name=$_FILES['icerik_resimyol']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE icerik SET 
			icerik_ad=:ad,
			icerik_detay=:detay,
			icerik_keywords=:keywords,
			icerik_durum=:durum,
			icerik_resimyol=:resimyol
			WHERE icerik_id={$_POST['icerik_id']}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['icerik_ad'],
			'detay' => $_POST['icerik_detay']	,
			'keywords' => $_POST['icerik_keywords'],
			'durum' => $_POST['icerik_durum'],
			'resimyol' => $resim_yolu			
			));

		$icerik_id=$_POST['icerik_id'];		

		if ($update)
		{
			$resimsil=$_POST['icerik_resimyol'];
			unlink("../../dosyalar/resimler/icerik/$resimsil");

			header("location: ../icerik-duzenle.php?icerik_id=$icerik_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../icerik-duzenle.php?icerik_id=$icerik_id&durum=duzenlenemedi");
		}

	}
	else
	{		

		$duzenle=$db->prepare("UPDATE icerik SET 
			icerik_ad=:ad,
			icerik_detay=:detay,
			icerik_keywords=:keywords,
			icerik_durum=:durum
			WHERE icerik_id={$_POST['icerik_id']}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['icerik_ad'],
			'detay' => $_POST['icerik_detay'],
			'keywords' => $_POST['icerik_keywords'],
			'durum' => $_POST['icerik_durum']		
			));

		$icerik_id=$_POST['icerik_id'];

		if ($update)
		{
			header("location: ../icerik-duzenle.php?icerik_id=$icerik_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../icerik-duzenle.php?icerik_id=$icerik_id&durum=duzenlenemedi");
		}
	}	

}

if (isset($_POST['menu-duzenle']))
{
	$duzenle=$db->prepare("UPDATE menu SET 
		menu_ust=:ust,	
		menu_ad=:ad,
		menu_link=:link,
		menu_detay=:detay,
		menu_sira=:sira,
		menu_durum=:durum		
		WHERE menu_id={$_POST['menu_id']}
		");
	$update=$duzenle->execute(array(
		'ust' => $_POST['menu_ust'],
		'ad' => $_POST['menu_ad'],
		'link' => $_POST['menu_link'],
		'detay' => $_POST['menu_detay'],
		'sira' => $_POST['menu_sira'],
		'durum' => $_POST['menu_durum']
		));
	if ($update)
	{
		header("location: ../menu-duzenle.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../menu-duzenle.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['logo-duzenle']))
{
	$uploads='../../dosyalar/resimler/logo';
	$tmp_name=$_FILES['ayar_logo']["tmp_name"];
	$name=$_FILES['ayar_logo']["name"];
	$benzersizsayi1=rand(20000,40000);
	$benzersizsayi2=rand(20000,40000);
	$benzersizsayi3=rand(20000,40000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$duzenle=$db->prepare("UPDATE ayar SET 		
		ayar_logo=:logo
		WHERE ayar_id=0
		");
	$update=$duzenle->execute(array(
		'logo' => $resim_yolu			
		));

	if ($update)
	{
		$resimsil=$_POST['ayar_logo'];
		unlink("../../dosyalar/resimler/logo/$resimsil");

		header("location: ../genel.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../genel.php?durum=duzenlenemedi");
	}

}

if (isset($_POST['profilfoto-duzenle']))
{
	$uploads='../dosyalar/resimler/yonetmen';
	$tmp_name=$_FILES['yonetmen_resimyol']["tmp_name"];
	$name=$_FILES['yonetmen_resimyol']["name"];
	$benzersizsayi1=rand(20000,40000);
	$benzersizsayi2=rand(20000,40000);
	$benzersizsayi3=rand(20000,40000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
	$resim_yolu=$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

	$duzenle=$db->prepare("UPDATE yonetmen SET 		
		yonetmen_resimyol=:resimyol
		WHERE yonetmen_id={$_POST['yonetmen_id']}
		");
	$update=$duzenle->execute(array(
		'resimyol' => $resim_yolu			
		));

	if ($update)
	{
		$resimsil=$_POST['yonetmen_resimyol'];
		unlink("../dosyalar/resimler/yonetmen/$resimsil");
		header("location: ../profil.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../profil.php?durum=duzenlenemedi");
	}

}	

if (isset($_POST['profil-duzenle']))
{
	$yonetmen_sifre=md5($_POST['yonetmen_sifre']);
	
	$duzenle=$db->prepare("UPDATE yonetmen SET 	
		yonetmen_adsoyad=:adsoyad,
		yonetmen_sifre=:sifre	
		WHERE yonetmen_id={$_POST['yonetmen_id']}
		");
	$update=$duzenle->execute(array(
		'adsoyad' => $_POST['yonetmen_adsoyad'],
		'sifre' => $yonetmen_sifre
		));
	if ($update)
	{
		header("location: ../profil.php?durum=duzenlendi");
	}
	else
	{
		header("location: ../profil.php?durum=duzenlenemedi");
	}
}

if (isset($_POST['emlak-duzenle']))
{
	if ($_FILES['emlak_resimyol']['size'] > 0)
	{
		$uploads='../../dosyalar/resimler/emlak';
		$tmp_name=$_FILES['emlak_resimyol']["tmp_name"];
		$name=$_FILES['emlak_resimyol']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE emlak SET 
			emlak_ad=:ad,
			emlak_detay=:detay,
			emlak_adres=:adres,
			emlak_fiyat=:fiyat,
			emlak_durum=:durum,
			emlak_resimyol=:resimyol
			WHERE emlak_id={$_POST['emlak_id']}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['emlak_ad'],
			'detay' => $_POST['emlak_detay'],
			'adres' => $_POST['emlak_adres'],
			'fiyat' => $_POST['emlak_fiyat'],
			'durum' => $_POST['emlak_durum'],
			'resimyol' => $resim_yolu			
			));

		$emlak_id=$_POST['emlak_id'];		

		if ($update)
		{
			$resimsil=$_POST['emlak_resimyol'];
			unlink("../../dosyalar/resimler/emlak/$resimsil");

			header("location: ../emlak-duzenle.php?emlak_id=$emlak_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../emlak-duzenle.php?emlak_id=$emlak_id&durum=duzenlenemedi");
		}

	}
	else
	{		
		$duzenle=$db->prepare("UPDATE emlak SET 
			emlak_ad=:ad,
			emlak_detay=:detay,
			emlak_adres=:adres,
			emlak_fiyat=:fiyat,
			emlak_durum=:durum
			WHERE emlak_id={$_POST['emlak_id']}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['emlak_ad'],
			'detay' => $_POST['emlak_detay'],
			'adres' => $_POST['emlak_adres'],
			'fiyat' => $_POST['emlak_fiyat'],
			'durum' => $_POST['emlak_durum']	
			));

		$emlak_id=$_POST['emlak_id'];

		if ($update)
		{
			header("location: ../emlak-duzenle.php?emlak_id=$emlak_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../emlak-duzenle.php?emlak_id=$emlak_id&durum=duzenlenemedi");
		}
	}	

}

if (isset($_POST['danisman-duzenle']))
{
	if ($_FILES['yonetmen_resimyol']['size'] > 0)
	{
		$uploads='../dosyalar/resimler/yonetmen';
		$tmp_name=$_FILES['yonetmen_resimyol']["tmp_name"];
		$name=$_FILES['yonetmen_resimyol']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");	

		$yonetmen_sifre=md5($_POST['yonetmen_sifre']);

		$duzenle=$db->prepare("UPDATE yonetmen SET 
			yonetmen_ad=:ad,
			yonetmen_sifre=:sifre,
			yonetmen_adsoyad=:adsoyad,
			yonetmen_detay=:detay,
			yonetmen_tel=:tel,
			yonetmen_mail=:mail,
			yonetmen_durum=:durum,
			yonetmen_resimyol=:resimyol
			WHERE yonetmen_id={$_POST['yonetmen_id']}
			");

		$update=$duzenle->execute(array(
			'ad' => $_POST['yonetmen_ad'],
			'sifre' => $yonetmen_sifre,
			'adsoyad' => $_POST['yonetmen_adsoyad'],
			'detay' => $_POST['yonetmen_detay'],
			'tel' => $_POST['yonetmen_tel'],
			'mail' => $_POST['yonetmen_mail'],
			'durum' => $_POST['yonetmen_durum'],
			'resimyol' => $resim_yolu
			));

		$yonetmen_id=$_POST['yonetmen_id'];		

		if ($update)
		{
			$resimsil=$_POST['yonetmen_resimyol'];
			unlink("../dosyalar/resimler/yonetmen/$resimsil");

			header("location: ../danisman-duzenle.php?yonetmen_id=$yonetmen_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../danisman-duzenle.php?yonetmen_id=$yonetmen_id&durum=duzenlenemedi");
		}

	}
	else
	{		
		$yonetmen_sifre=md5($_POST['yonetmen_sifre']);

		$duzenle=$db->prepare("UPDATE yonetmen SET 
			yonetmen_ad=:ad,
			yonetmen_sifre=:sifre,
			yonetmen_adsoyad=:adsoyad,
			yonetmen_detay=:detay,
			yonetmen_tel=:tel,
			yonetmen_mail=:mail,
			yonetmen_durum=:durum
			WHERE yonetmen_id={$_POST['yonetmen_id']}
			");

		$update=$duzenle->execute(array(
			'ad' => $_POST['yonetmen_ad'],
			'sifre' => $yonetmen_sifre,
			'adsoyad' => $_POST['yonetmen_adsoyad'],
			'detay' => $_POST['yonetmen_detay'],
			'tel' => $_POST['yonetmen_tel'],
			'mail' => $_POST['yonetmen_mail'],
			'durum' => $_POST['yonetmen_durum']
			));

		$yonetmen_id=$_POST['yonetmen_id'];	

		if ($update)
		{
			header("location: ../danisman-duzenle.php?yonetmen_id=$yonetmen_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../danisman-duzenle.php?yonetmen_id=$yonetmen_id&durum=duzenlenemedi");
		}
	}	

}

?>