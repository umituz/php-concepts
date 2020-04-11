                              <?php 
ob_start();
include 'baglan.php';
include '../fonksiyonlar/seo.php';

if (isset($_POST['genelayar-duzenle']))
{	
	$duzenle=$db->prepare("UPDATE ayar SET 
		ayar_siteurl=:siteurl,	
		ayar_title=:title,
		ayar_description=:description,
		ayar_keywords=:keywords,
		ayar_footer=:footer,
		ayar_sitemail=:sitemail,
		ayar_slider=:slider,
		ayar_tema=:tema
		WHERE ayar_id=0
		");
	$update=$duzenle->execute(array(
		'siteurl' => $_POST['ayar_siteurl'],
		'title' => $_POST['ayar_title'],
		'description' => $_POST['ayar_description'],
		'keywords' => $_POST['ayar_keywords'],
		'footer' => $_POST['ayar_footer'],
		'sitemail' => $_POST['ayar_sitemail'],
		'slider' => $_POST['ayar_slider'],	
		'tema' => $_POST['ayar_tema']	
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
		sosyal_pinterest=:pinterest,
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
		'pinterest' => $_POST['sosyal_pinterest'],
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
		$uploads='../upload/resim/slider';
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
			unlink("../upload/resim/slider/$resimsil");

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

if (isset($_POST['referans-duzenle']))
{
	$referans_id=$_POST['referans_id'];

	if ($_FILES['referans_resimyol']['size'] > 0)
	{
		$uploads='../upload/resim/referans';
		$tmp_name=$_FILES['referans_resimyol']["tmp_name"];
		$name=$_FILES['referans_resimyol']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizsayi3=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		

		$duzenle=$db->prepare("UPDATE referans SET 			
			referans_ad=:ad,
			referans_detay=:detay,
			referans_link=:link,
			referans_durum=:durum,
			referans_resimyol=:resimyol
			WHERE referans_id={$referans_id}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['referans_ad'],
			'detay' => $_POST['referans_detay'],
			'link' => $_POST['referans_link'],
			'durum' => $_POST['referans_durum'],
			'resimyol' => $resim_yolu			
			));

		if ($update)
		{
			$resimsil=$_POST['referans_resimyol'];
			unlink("../upload/resim/referans/$resimsil");

			header("location: ../referans-duzenle.php?referans_id=$referans_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../referans-duzenle.php?referans_id=$referans_id&durum=duzenlenemedi");
		}

	}
	else
	{
		$duzenle=$db->prepare("UPDATE referans SET 
			referans_ad=:ad,
			referans_detay=:detay,
			referans_link=:link,
			referans_durum=:durum
			WHERE referans_id={$referans_id}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['referans_ad'],
			'detay' => $_POST['referans_detay'],
			'link' => $_POST['referans_link'],
			'durum' => $_POST['referans_durum']	
			));

		if ($update)
		{
			header("location: ../referans-duzenle.php?referans_id=$referans_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../referans-duzenle.php?referans_id=$referans_id&durum=duzenlenemedi");
		}
	}	

}

if (isset($_POST['icerik-duzenle']))
{
	$icerik_link = seo($_POST["icerik_ad"]);

	if ($_FILES['icerik_resimyol']['size'] > 0)
	{
		$uploads='../upload/resim/icerik';
		$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
		$name=$_FILES['icerik_resimyol']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");		

		$duzenle=$db->prepare("UPDATE icerik SET 
			icerik_ad=:ad,
			icerik_link=:link,
			icerik_kategori=:kategori,
			icerik_detay=:detay,
			icerik_keywords=:keywords,
			icerik_durum=:durum,
			icerik_anasayfada_goster=:anasayfada_goster,
			icerik_resimyol=:resimyol
			WHERE icerik_id={$_POST['icerik_id']}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['icerik_ad'],
			'link' => $icerik_link,
			'kategori' => $_POST['icerik_kategori'],
			'detay' => $_POST['icerik_detay'],
			'keywords' => $_POST['icerik_keywords'],
			'durum' => $_POST['icerik_durum'],
			'anasayfada_goster' => $_POST['icerik_anasayfada_goster'],
			'resimyol' => $resim_yolu		
			));

		$icerik_id=$_POST['icerik_id'];		

		if ($update)
		{
			$resimsil=$_POST['icerik_resimyol'];
			unlink("../upload/resim/icerik/$resimsil");

			$alansor=$db->prepare("SELECT * FROM ilave_alanlar");
			$alansor->execute();
			$alansay=$alansor->rowCount($alansor);
			if ($alansay > 0) {
				while ($alancek=$alansor->fetch(PDO::FETCH_ASSOC)){
					extract($alancek);
					if ($_POST["alan_".$alan_id]) {
						$deger = $_POST["alan_".$alan_id];
						$degersor=$db->prepare("SELECT * FROM ilave_alan_degerler WHERE deger_icerik_id=:icerik_id && deger_alan_id=:alan_id");
						$degersor->execute(array(
							'icerik_id' => $icerik_id,
							'alan_id' => $alan_id
							));
						$degersay=$degersor->rowCount();
						$degercek=$degersor->fetch(PDO::FETCH_ASSOC);
						extract($degercek);
						if ($degersay > 0) {
							$duzenle=$db->prepare("UPDATE ilave_alan_degerler SET 
								deger_detay=:detay 
								WHERE deger_icerik_id=$icerik_id && deger_alan_id=$alan_id ");
							$update=$duzenle->execute(array(
								'detay' => $deger
								));
						}else {
							$ekle=$db->prepare("INSERT INTO ilave_alan_degerler SET
								deger_alan_id =:alan_id,
								deger_detay=:detay,
								deger_icerik_id=:icerik_id	");
							$insert=$ekle->execute(array(
								'alan_id' => $alan_id,
								'detay' => $deger,
								'icerik_id' => $icerik_id
								));
						}
						
					}
				}
			}

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
			icerik_link=:link,
			icerik_kategori=:kategori,
			icerik_detay=:detay,
			icerik_keywords=:keywords,
			icerik_durum=:durum,
			icerik_anasayfada_goster=:anasayfada_goster
			WHERE icerik_id={$_POST['icerik_id']}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['icerik_ad'],
			'link' => $icerik_link,
			'kategori' => $_POST['icerik_kategori'],
			'detay' => $_POST['icerik_detay'],
			'keywords' => $_POST['icerik_keywords'],
			'durum' => $_POST['icerik_durum'],
			'anasayfada_goster' => $_POST['icerik_anasayfada_goster']
			));

		$icerik_id=$_POST['icerik_id'];

		if ($update)
		{
			$alansor=$db->prepare("SELECT * FROM ilave_alanlar");
			$alansor->execute();
			$alansay=$alansor->rowCount($alansor);
			if ($alansay > 0) {
				while ($alancek=$alansor->fetch(PDO::FETCH_ASSOC)){
					extract($alancek);
					if ($_POST["alan_".$alan_id]) {
						$deger = $_POST["alan_".$alan_id];
						$degersor=$db->prepare("SELECT * FROM ilave_alan_degerler WHERE deger_icerik_id=:icerik_id && deger_alan_id=:alan_id");
						$degersor->execute(array(
							'icerik_id' => $icerik_id,
							'alan_id' => $alan_id
							));
						$degersay=$degersor->rowCount();
						$degercek=$degersor->fetch(PDO::FETCH_ASSOC);
						extract($degercek);
						if ($degersay > 0) {
							$duzenle=$db->prepare("UPDATE ilave_alan_degerler SET 
								deger_detay=:detay 
								WHERE deger_icerik_id=$icerik_id && deger_alan_id=$alan_id ");
							$update=$duzenle->execute(array(
								'detay' => $deger
								));
						}else {
							$ekle=$db->prepare("INSERT INTO ilave_alan_degerler SET
								deger_alan_id =:alan_id,
								deger_detay=:detay,
								deger_icerik_id=:icerik_id	");
							$insert=$ekle->execute(array(
								'alan_id' => $alan_id,
								'detay' => $deger,
								'icerik_id' => $icerik_id
								));
						}
						
					}
				}
			}
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
		menu_sira=:sira,
		menu_durum=:durum		
		WHERE menu_id={$_POST['menu_id']}
		");
	$update=$duzenle->execute(array(
		'ust' => $_POST['menu_ust'],
		'ad' => $_POST['menu_ad'],
		'link' => $_POST['menu_link'],
		'sira' => $_POST['menu_sira'],
		'durum' => $_POST['menu_durum']
		));
	$menu_id=$_POST['menu_id'];
	if ($update)
	{
		header("location: ../menu-duzenle.php?menu_id=$menu_id&durum=duzenlendi");
	}
	else
	{
		header("location: ../menu-duzenle.php?menu_id=$menu_id&durum=duzenlenemedi");
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

if (isset($_POST['yonetmen-duzenle']))
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
			yonetmen_yetki=:yetki,
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
			'yetki' => $_POST['yonetmen_yetki'],
			'durum' => $_POST['yonetmen_durum'],
			'resimyol' => $resim_yolu
			));

		$yonetmen_id=$_POST['yonetmen_id'];		
		$yonetmen_resimyol=$_POST['yonetmen_resimyol'];		


		if ($update)
		{
			$resimsil=$_POST['yonetmen_resimyol'];
			unlink("../dosyalar/resimler/yonetmen/$resimsil");

			header("location: ../yonetici-duzenle.php?yonetmen_id=$yonetmen_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../yonetici-duzenle.php?yonetmen_id=$yonetmen_id&durum=duzenlenemedi");
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
			yonetmen_yetki=:yetki,
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
			'yetki' => $_POST['yonetmen_yetki'],
			'durum' => $_POST['yonetmen_durum']
			));

		$yonetmen_id=$_POST['yonetmen_id'];	

		if ($update)
		{
			header("location: ../yonetici-duzenle.php?yonetmen_id=$yonetmen_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../yonetici-duzenle.php?yonetmen_id=$yonetmen_id&durum=duzenlenemedi");
		}
	}	

}

if (isset($_POST['kategori-duzenle']))
{
	$kategori_ad = $_POST["kategori_ad"];
	$kategori_link=seo($kategori_ad);
	$kategori_id = $_POST["kategori_id"];

	$duzenle=$db->prepare("UPDATE kategoriler SET 
		kategori_ad=:ad,
		kategori_link=:link,
		kategori_detay=:detay,
		kategori_keywords=:keywords,
		kategori_anasayfa_konu=:anasayfa_konu,
		kategori_full_konu=:full_konu,
		kategori_zaman=:zaman
		WHERE kategori_id={$_POST['kategori_id']}
		");

	$update=$duzenle->execute(array(
		'ad' => $_POST['kategori_ad'],
		'link' => $kategori_link,
		'detay' => $_POST['kategori_detay'],
		'keywords' => $_POST['kategori_keywords'],
		'anasayfa_konu' => $_POST['kategori_anasayfa_konu'],
		'full_konu' => $_POST['kategori_full_konu'],
		'zaman' => $zaman
		));
	if ($update)
	{
		header("location: ../kategori-duzenle.php?kategori_id=$kategori_id&durum=duzenlendi");
	}
	else
	{
		header("location: ../kategori-duzenle.php?kategori_id=$kategori_id&durum=duzenlenemedi");
	}	
}

if (isset($_POST['uye-duzenle']))
{
	$uye_ad = $_POST["uye_ad"];
	$uye_link=seo($uye_ad);
	$uye_id = $_POST["uye_id"];
	$uye_sifre=md5($_POST['uye_sifre']);

	$duzenle=$db->prepare("UPDATE uyeler SET 
		uye_ad=:ad,
		uye_link=:link,
		uye_sifre=:sifre,
		uye_mail=:mail,
		uye_durum=:durum
		WHERE uye_id={$_POST['uye_id']}
		");

	$update=$duzenle->execute(array(
		'ad' => $_POST['uye_ad'],
		'link' => $uye_link,
		'sifre' => $uye_sifre,
		'mail' => $_POST['uye_mail'],
		'durum' => $_POST['uye_durum']
		));
	if ($update)
	{
		header("location: ../uye-duzenle.php?uye_id=$uye_id&durum=duzenlendi");
	}
	else
	{
		header("location: ../uye-duzenle.php?uye_id=$uye_id&durum=duzenlenemedi");
	}
	
}

if (isset($_POST['alan-duzenle']))
{
	$duzenle=$db->prepare("UPDATE ilave_alanlar SET 
		alan_ad=:ad,
		alan_tip=:tip
		WHERE alan_id={$_POST['alan_id']}
		");

	$update=$duzenle->execute(array(
		'ad' => $_POST['alan_ad'],
		'tip' => $_POST['alan_tip']
		));

	$alan_id=$_POST["alan_id"];

	if ($update)
	{
		header("location: ../ilave_alan_duzenle.php?alan_id=$alan_id&durum=duzenlendi");
	}
	else
	{
		header("location: ../ilave_alan_duzenle.php?alan_id=$alan_id&durum=duzenlenemedi");
	}	
}

if (isset($_POST['sayfa-duzenle']))
{
	$sayfa_link = seo($_POST["sayfa_ad"]);
	$sayfa_id = $_POST['sayfa_id'];

	if ($_FILES['sayfa_resimyol']['size'] > 0)
	{
		$uploads='../upload/resim/sayfa';
		$tmp_name=$_FILES['sayfa_resimyol']["tmp_name"];
		$name=$_FILES['sayfa_resimyol']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizsayi3=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE sayfalar SET 
			sayfa_ad=:ad,
			sayfa_link=:link,
			sayfa_detay=:detay,		
			sayfa_durum=:durum,
			sayfa_resimyol=:resimyol
			WHERE sayfa_id={$sayfa_id}
		");
		$update=$duzenle->execute(array(
			'ad' => $_POST['sayfa_ad'],
			'link' => $sayfa_link,
			'detay' => $_POST['sayfa_detay'],
			'durum' => $_POST['sayfa_durum'],
			'resimyol' => $resim_yolu			
			));

		if ($update)
		{
			$resimsil=$_POST['sayfa_resimyol'];
			unlink("../upload/resim/sayfa/$resimsil");

			header("location: ../sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=duzenlenemedi");
		}

	}else{
		$duzenle=$db->prepare("UPDATE sayfalar SET 
			sayfa_ad=:ad,
			sayfa_link=:link,
			sayfa_detay=:detay,		
			sayfa_durum=:durum	
			WHERE sayfa_id={$sayfa_id}
		");
		$update=$duzenle->execute(array(
			'ad' => $_POST['sayfa_ad'],
			'link' => $sayfa_link,
			'detay' => $_POST['sayfa_detay'],	
			'durum' => $_POST['sayfa_durum']
		));

		if ($update)
		{
			header("location: ../sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=duzenlenemedi");
		}
	}

	
}

if (isset($_POST['sayfalama-duzenle']))
{
	
	$blog_limit = $_POST["blog_limit"];
	$ders_limit = $_POST["ders_limit"];
	$referans_limit = $_POST["referans_limit"];
	$ayar_sayfalama = $blog_limit."|".$ders_limit."|".$referans_limit;

	$duzenle=$db->prepare("UPDATE ayar SET 
		ayar_sayfalama=:sayfalama	
		WHERE ayar_id=0
		");
	$update=$duzenle->execute(array(
		'sayfalama' => $ayar_sayfalama
		));
	$ayar_id=0;

	if ($update)
	{
		header("location: ../sayfalama.php?ayar_id=$ayar_id&durum=duzenlendi");
	}
	else
	{
		header("location: ../sayfalama.php?ayar_id=$ayar_id&durum=duzenlenemedi");
	}
}

if (isset($_POST['reklam-duzenle']))
{
	if ($_FILES['reklam_resimyol']['size'] > 0){

		$uploads='../dosyalar/resimler/reklam';
		$tmp_name=$_FILES['reklam_resimyol']["tmp_name"];
		$name=$_FILES['reklam_resimyol']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE reklam SET 
			reklam_ad=:ad,
			reklam_detay=:detay,
			reklam_durum=:durum,
			reklam_resimyol=:resimyol
			WHERE reklam_id={$_POST['reklam_id']}
			");

		$update=$duzenle->execute(array(
			'ad' => $_POST['reklam_ad'],
			'detay' => $_POST['reklam_detay'],
			'durum' => $_POST['reklam_durum'],
			'resimyol' => $resim_yolu
			));

		$reklam_id=$_POST['reklam_id'];

		if ($update)
		{
			$resimsil=$_POST['reklam_resimyol'];
			unlink("../dosyalar/resimler/reklam/$resimsil");
			header("location: ../reklam-duzenle.php?reklam_id=$reklam_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../reklam-duzenle.php?reklam_id=$reklam_id&durum=duzenlenemedi");
		}	

	}else {
		$duzenle=$db->prepare("UPDATE reklam SET 
			reklam_ad=:ad,
			reklam_detay=:detay,
			reklam_durum=:durum
			WHERE reklam_id={$_POST['reklam_id']}
			");

		$update=$duzenle->execute(array(
			'ad' => $_POST['reklam_ad'],
			'detay' => $_POST['reklam_detay'],
			'durum' => $_POST['reklam_durum']
			));

		$reklam_id=$_POST['reklam_id'];

		if ($update)
		{
			header("location: ../reklam-duzenle.php?reklam_id=$reklam_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../reklam-duzenle.php?reklam_id=$reklam_id&durum=duzenlenemedi");
		}	
	}
}

if (isset($_POST['dosya-duzenle']))
{
	$dosya_ad=seo($_POST['dosya_ad']);

	$duzenle=$db->prepare("UPDATE dosya SET 
		dosya_ad=:ad,
		dosya_detay=:detay
		WHERE dosya_id={$_POST['dosya_id']}
		");

	$update=$duzenle->execute(array(
		'ad' => $dosya_ad,
		'detay' => $_POST['dosya_detay']
		));

	$dosya_id=$_POST['dosya_id'];

	if ($update)
	{
		header("location: ../dosya-duzenle.php?dosya_id=$dosya_id&durum=duzenlendi");
	}
	else
	{
		header("location: ../dosya-duzenle.php?dosya_id=$dosya_id&durum=duzenlenemedi");
	}	
	
}

if (isset($_POST['sosyalayar-duzenle']))
{
	$uye_id = $_POST["uye_id"];

	if ($_FILES['uye_resimyol']['size'] > 0)
	{
		$uploads='../../uye/'.$uye_id.'';
		$tmp_name=$_FILES['uye_resimyol']["tmp_name"];
		$name=$_FILES['uye_resimyol']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizsayi3=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
		$resim_yolu=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE uye SET 
			uye_isim=:isim,
			uye_soyisim=:soyisim,
			uye_detay=:detay,
			uye_ulke=:ulke,
			uye_sehir=:sehir,
			uye_semt=:semt,
			uye_postakodu=:postakodu,
			uye_telefon=:telefon,
			uye_resimyol=:resimyol
			WHERE uye_id={$uye_id}
			");
		$update=$duzenle->execute(array(
			'isim' => $_POST['uye_isim'],
			'soyisim' => $_POST['uye_soyisim'],
			'detay' => $_POST['uye_detay'],
			'ulke' => $_POST['uye_ulke'],
			'sehir' => $_POST['uye_sehir'],
			'semt' => $_POST['uye_semt'],
			'postakodu' => $_POST['uye_postakodu'],
			'telefon' => $_POST['uye_telefon'],
			'resimyol' => $resim_yolu			
			));

		if ($update)
		{
			$resimsil=$_POST['uye_resimyol'];
			unlink("../../uye/$uye_id/$resimsil");

			header("location: ../../ayar.php?uye_id=$uye_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../../ayar.php?uye_id=$uye_id&durum=duzenlenemedi");
		}

	}
	else
	{
		$duzenle=$db->prepare("UPDATE uye SET 
			uye_isim=:isim,
			uye_soyisim=:soyisim,
			uye_detay=:detay,
			uye_ulke=:ulke,
			uye_sehir=:sehir,
			uye_semt=:semt,
			uye_postakodu=:postakodu,
			uye_telefon=:telefon
			WHERE uye_id={$uye_id}
			");
		$update=$duzenle->execute(array(
			'isim' => $_POST['uye_isim'],
			'soyisim' => $_POST['uye_soyisim'],
			'detay' => $_POST['uye_detay'],
			'ulke' => $_POST['uye_ulke'],
			'sehir' => $_POST['uye_sehir'],
			'semt' => $_POST['uye_semt'],
			'postakodu' => $_POST['uye_postakodu'],
			'telefon' => $_POST['uye_telefon']	
			));

		if ($update)
		{
			header("location: ../../ayar.php?uye_id=$uye_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../../ayar.php?uye_id=$uye_id&durum=duzenlenemedi");
		}
	}	

}



if (isset($_POST['ders-duzenle']))
{
	$ders_id=$_POST['ders_id'];

	if ($_FILES['ders_video']['size'] > 0)
	{
		$uploads='../upload/video/ders';
		$tmp_name=$_FILES['ders_video']["tmp_name"];
		$name=$_FILES['ders_video']["name"];
		$benzersizsayi1=rand(20000,40000);
		$benzersizsayi2=rand(20000,40000);
		$benzersizsayi3=rand(20000,40000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
		$ders_video=$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE ders SET 
			ders_ad=:ad,
			ders_link=:link,
			ders_detay=:detay,
			ders_kategori=:kategori,
			ders_keywords=:keywords,
			ders_durum=:durum,
			ders_video=:video
			WHERE ders_id={$ders_id}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['ders_ad'],
			'link' => $ders_link,
			'detay' => $_POST['ders_detay'],
			'kategori' => $_POST['ders_kategori'],
			'keywords' => $_POST['ders_keywords'],
			'durum' => $_POST['ders_durum'],
			'video' => $ders_video			
			));

		if ($update)
		{
			$videosil=$_POST['ders_video'];
			unlink("../upload/video/ders/$videosil");

			header("location: ../ders-duzenle.php?ders_id=$ders_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../ders-duzenle.php?ders_id=$ders_id&durum=duzenlenemedi");
		}

	}
	else
	{
		$duzenle=$db->prepare("UPDATE ders SET 
			ders_ad=:ad,
			ders_link=:link,
			ders_detay=:detay,
			ders_kategori=:kategori,
			ders_keywords=:keywords,
			ders_durum=:durum
			WHERE ders_id={$ders_id}
			");
		$update=$duzenle->execute(array(
			'ad' => $_POST['ders_ad'],
			'link' => $ders_link,
			'detay' => $_POST['ders_detay'],
			'kategori' => $_POST['ders_kategori'],
			'keywords' => $_POST['ders_keywords'],
			'durum' => $_POST['ders_durum']	
			));

		if ($update)
		{
			header("location: ../ders-duzenle.php?ders_id=$ders_id&durum=duzenlendi");
		}
		else
		{
			header("location: ../ders-duzenle.php?ders_id=$ders_id&durum=duzenlenemedi");
		}
	}	

}


?>