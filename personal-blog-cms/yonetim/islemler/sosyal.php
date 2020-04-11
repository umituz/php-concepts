<?php 
ob_start();
include 'baglan.php';
include '../fonksiyonlar/seo.php';

if (isset($_POST['durum-ekle']))
{
	$uye_id = $_POST['uye_id'];
	$durumsor = $db->prepare("SELECT * FROM durum WHERE uye_id=:uye_id ORDER BY durum_zaman DESC");
	$durumsor->execute(array('uye_id' => $uye_id));
	// $duid DURUM ID nin kısaltılmış halidir.
	
	while ($durumcek=$durumsor->fetch(PDO::FETCH_ASSOC)) { extract($durumcek);
		$duid = 1;
		if ($duid > 20) {
			$durumsil = $db->prepare("DELETE * FROM durum WHERE durum_id=:durum_id");
			$durumsil->execute(array('durum_id' => $durum_id));
		}
		$duid++;
	}


	$ekle=$db->prepare("INSERT INTO durum SET 		
		durum_detay=:detay,
		durum_uye_id=:uye_id
		");
	$insert=$ekle->execute(array(		
		'detay' => $_POST['durum_detay'],
		'uye_id' => $_POST['uye_id']
		));
	if ($insert)
	{
		header("location: ../../profil.php?durum=eklendi");
	}
	else
	{
		header("location: ../../profil.php?durum=eklenemedi");
	}
}

if (isset($_POST["sifre_degistir"])) {
	$uye_session_id = $_POST["uye_session_id"];
	$mevcut_sifre = $_POST["mevcut_sifre"];
	$yenisifre1 = $_POST["yenisifre1"];
	$yenisifre2 = $_POST["yenisifre2"];

	if ($_POST["yenisifre1"] != $_POST["yenisifre2"]) {
		header("Location: ../../hesap.php?durum=yanlis");
	}else{
		$eski_sifre=md5($mevcut_sifre);
		$yeni_sifre=md5($yenisifre1);

		$uyesor=$db->prepare("SELECT * FROM uye WHERE uye_id=:uye_session_id && uye_sifre=:eski_sifre");
		$uyesor->execute(array('uye_session_id' => $uye_session_id, 'eski_sifre' => $eski_sifre));
		$uyesay=$uyesor->rowCount();

		if ($uyesay > 0) {
			$duzenle = $db->prepare("UPDATE uye SET uye_sifre=:yeni_sifre WHERE uye_id={$uye_session_id}");
			$update=$duzenle->execute(array('yeni_sifre' => $yeni_sifre));
			if ($update)
			{
				header("location: ../../hesap.php?durum=basarili");
			}
			else
			{
				header("location: ../../hesap.php?durum=basarisiz");
			}

		}else{
			header("Location: ../../hesap.php?durum=mevcut");
		}
	}
}

if (isset($_POST["hesap_sil"])) {
	$uye_session_id = $_POST["uye_session_id"];
	$hesapsil_sifre = $_POST["hesapsil_sifre"];
	$hesapsil_sifre=md5($hesapsil_sifre);

	if (!$_POST["hesapsil_sifre"]) {
		header("Location: ../../hesap.php?durum=silinemedi");
	}else{
		$uyesor=$db->prepare("SELECT * FROM uye WHERE uye_id=:uye_session_id && uye_sifre=:hesapsil_sifre");
		$uyesor->execute(array('uye_session_id' => $uye_session_id, 'hesapsil_sifre' => $hesapsil_sifre));
		$uyesay=$uyesor->rowCount();

		if ($uyesay > 0) {
			$uye_resimyol="../../uye/$uye_session_id";
			if (file_exists($uye_resimyol)) {
				unlink($uye_resimyol);
				$uye_klasor="../../uye/$uye_session_id";
				rmdir($uye_klasor,0755);
			}else{
				$uyesil=$db->prepare("DELETE FROM uye WHERE uye_id=:uye_session_id");
				$uyesil->execute(array('uye_session_id' => $uye_session_id));
				$durumsil=$db->prepare("DELETE FROM durum WHERE durum_uye_id=:uye_session_id");
				$durumsil->execute(array('uye_session_id' => $uye_session_id));
			/*
			$_SESSION[] = array();
			if (isset($_COOKIE['idCookie'])) {
				setcookie("idCookie",'',time()+42000,'/');
				setcookie("passCookie",'',time()+42000,'/');
			}
			*/
			session_start();
			session_destroy();
			header("Location: ../../index.php?durum=cikis");
			exit;
			if ($update)
			{
				header("location: ../../hesap.php?durum=basarili");
			}
			else
			{
				header("location: ../../hesap.php?durum=basarisiz");
			}
		}	
	}
}
}

if (isset($_POST['sifre_unutmak'])) {
	$aktivasyon = 1;
	$uye_mail = $_POST['uye_mail'];
	strip_tags(stripslashes($uye_mail));
	$mailsor = $db->prepare("SELECT * FROM uye WHERE uye_mail=:uye_mail && uye_mail_aktivasyon=:aktivasyon");
	$mailsor->execute(array('uye_mail' => $uye_mail, 'aktivasyon' => $aktivasyon));
	$mailsay = $mailsor->rowCount();
	if ($mailsay > 0) {
		$mailkes = substr($uye_mail,0,4);
		$rastgele_sayi_1 = rand();
		$rastgele_sayi_2 = rand();
		$rastgele_sifre = "$mailkes$rastgele_sayi_1$rastgele_sayi_2";
		$hash_sifre = md5($rastgele_sifre);

		$sifresor = $db->prepare("UPDATE uye SET uye_sifre=:hash_sifre WHERE uye_mail={$uye_mail}");
		$sifresor->execute(array('hash_sifre' => $hash_sifre));

		$kime ="$email";
		$kimden = "info@prensipajans.com";
		$konu = "Yeni Kullanıcı Şifresi";
		$mesaj = "Merhaba $uye_isim<br>
		Yeni Şifreniz : $rastgele_sifre <br>
		Haydi hemen şiteye!
		info@prensipajans.com";

		$headers = "From: info@prensipajans.com\r\n";
		$header = "MIME-VERSION 1.0\n";
		$headers = "Content-type: text/html; charset=iso-8859-1 \n";

		if (mail($kime,$kimden,$mesaj,$headers)) {
			header("Location: ../../sifre_unutmak.php?durum=mail_ok");
		}else{
			header("Location: ../../sifre_unutmak.php?durum=mail_yok");
		}
		
	}else{
		header("Location: ../../sifre_unutmak.php?durum=yok");
	}
}

if (isset($_POST['arkadas_ekle'])) {	
	$uye1 = $_POST['uye1'];
	$uye2 = $_POST['uye2'];
	if (!$uye1 || !$uye2) {
		echo "Hata! Eksik data...";
		exit;
	}elseif ($uye1 == $uye2) {
		echo "Hata! Kendini arkadaş olarak ekleyemezsin...";
		exit;
	}
	$sorgu1 = $db->prepare("SELECT * FROM arkadaslik_istekleri WHERE istek_uye1=:uye1 && istek_uye2=:uye2");
	$sorgu1->execute(array('uye1' => $uye1, 'uye2' => $uye2));
	$sorgusay1 = $sorgu1->rowCount();
	if ($sorgusay1 > 0) {
		header("Location: ../../profil.php?durum=mevcut&id=$uye2");
		exit;
	}
	$sorgu2 = $db->prepare("SELECT * FROM arkadaslik_istekleri WHERE istek_uye1=:uye2 && istek_uye2=:uye1");
	$sorgu2->execute(array('uye2' => $uye2, 'uye1' => $uye1));
	$sorgusay2 = $sorgu2->rowCount();
	if ($sorgusay2 > 0) {
		header("Location: ../../profil.php?durum=zaten&id=$uye2");
		exit;
	}
	$ekle=$db->prepare("INSERT INTO arkadaslik_istekleri SET istek_uye1=:uye1, istek_uye2=:uye2"); 
	$ekle->execute(array('uye1' => $uye1, 'uye2' => $uye2));
	if ($ekle) {
		header("Location: ../../profil.php?durum=basarili&id=$uye2");
		exit;
	}
}

if (isset($_POST['istek_kabul'])) {

	$istek_id = $_POST['istek_id'];
	$isteksor = $db->prepare("SELECT * FROM arkadaslik_istekleri WHERE istek_id=:istek_id");
	$isteksor->execute(array('istek_id' => $istek_id));
	$isteksay = $isteksor->rowCount();
	while ($istekcek = $isteksor->fetch(PDO::FETCH_ASSOC)) {
		extract($istekcek);
	}

	if ($isteksay < 1) {
		header("Location: ../../arkadaslik_istekleri.php?durum=hata");
	}

	$uye1sor=$db->prepare("SELECT uye_arkadaslar FROM uye WHERE uye_id=:istek_uye1");
	$uye1sor->execute(array('istek_uye1' => $istek_uye1));
	while ($uye1cek=$uye1sor->fetch(PDO::FETCH_ASSOC)) {
		$arkadas1 = $uye1cek['uye_arkadaslar'];
	}	

	$uye2sor=$db->prepare("SELECT uye_arkadaslar FROM uye WHERE uye_id=:istek_uye2");
	$uye2sor->execute(array('istek_uye2' => $istek_uye2));
	while ($uye2cek=$uye2sor->fetch(PDO::FETCH_ASSOC)) {
		$arkadas2 = $uye2cek['uye_arkadaslar'];
	}

	$arkadas1_array = explode(",", $arkadas1); 
	$arkadas2_array = explode(",", $arkadas2);

	if (in_array($istek_uye2,$arkadas1_array)) {
		echo "Bu üye zaten senin arkadaşın! Bizle dalga mı geçiyorsun lan sen";
		exit;
	}
	if (in_array($istek_uye1,$arkadas2_array)) {
		echo "Bu üye zaten senin arkadaşın! Neden böyle yapıyorsun ki, anlayamıyorum!";
		exit;
	}

	if ($arkadas1 != "") {
		$arkadas1 = "$arkadas1,$istek_uye2";
	}else{
		$arkadas1 = "$istek_uye2";
	}

	if ($arkadas2 != "") {
		$arkadas2 = "$arkadas2,$istek_uye1"; 
	}else{
		$arkadas2 = "$istek_uye1"; 
	}

	$arkadas1_update = $db->prepare("UPDATE uye SET uye_arkadaslar=:arkadas1 WHERE uye_id={$istek_uye1}");
	$arkadas1_update->execute(array('arkadas1' => $arkadas1));

	$arkadas2_update = $db->prepare("UPDATE uye SET uye_arkadaslar=:arkadas2 WHERE uye_id={$istek_uye2}");
	$arkadas2_update->execute(array('arkadas2' => $arkadas2));

	$istek_sil = $db->prepare("DELETE FROM arkadaslik_istekleri WHERE istek_id=:istek_id");
	$istek_sil->execute(array('istek_id' => $istek_id));
	header("Location: ../../arkadaslik_istekleri.php?durum=basarili");
	exit;
}

if (isset($_POST['istek_red'])) {
	$istek_id = $_POST['istek_id'];
	$istek_sil = $db->prepare("DELETE FROM arkadaslik_istekleri WHERE istek_id=:istek_id");
	$istek_sil->execute(array('istek_id' => $istek_id));
	header("Location: ../../arkadaslik_istekleri.php?durum=silindi");
	exit;
}

if (isset($_POST['arkadas_sil'])) {	
	$uye1 = $_POST['uye1'];
	$uye2 = $_POST['uye2'];
	if (!$uye1 || !$uye2) {
		echo "Hata! Eksik data...";
		exit;
	}elseif ($uye1 == $uye2) {
		echo "Hata! Kendini silemezsin...";
		exit;
	}
	$sorgu1 = $db->prepare("SELECT * FROM uye WHERE uye_id=:uye1");
	$sorgu1->execute(array('uye1' => $uye1));
	while ($sorgu1cek=$sorgu1->fetch(PDO::FETCH_ASSOC)) {
		$arkadas1 = $sorgu1cek['uye_arkadaslar'];
	}
	$sorgu2 = $db->prepare("SELECT * FROM uye WHERE uye_id=:uye2");
	$sorgu2->execute(array('uye2' => $uye2));
	while ($sorgu2cek=$sorgu2->fetch(PDO::FETCH_ASSOC)) {
		$arkadas2 = $sorgu2cek['uye_arkadaslar'];
	}
	$arkadas_array1 = explode(",", $arkadas1);
	$arkadas_array2 = explode(",", $arkadas2);

	if (!in_array($uye1, $arkadas_array2)) {
		echo "Bu kişi senin arkadaş listende değil!";
		exit;
	}
	if (!in_array($uye2, $arkadas_array1)) {
		echo "Bu kişi senin arkadaş list3213213ende değil!";
		exit;
	}
	
	foreach ($arkadas_array1 as $anahtar => $deger) {
		if ($deger == $uye1) {
			unset($arkadas_array1[$anahtar]);
		}
	}
	foreach ($arkadas_array2 as $anahtar => $deger) {
		if ($deger == $uye2) {
			unset($arkadas_array2[$anahtar]);
		}
	}
	$yeni_ifade1 = implode(",", $arkadas_array1);
	$yeni_ifade2 = implode(",", $arkadas_array2);
	$sql1=$db->prepare("UPDATE uye SET uye_arkadaslar=:yeni_ifade1 WHERE uye_id={$uye1}");
	$sql1->execute(array('yeni_ifade1' => $yeni_ifade1));
	$sql2=$db->prepare("UPDATE uye SET uye_arkadaslar=:yeni_ifade2 WHERE uye_id={$uye2}");
	$sql2->execute(array('yeni_ifade2' => $yeni_ifade2));
	echo "Bu üye ile artık arkadaş değilsin!";
	exit;
}


if (isset($_POST['sosyalhesap-duzenle']))
{
	$uye_sifre=md5($_POST['uye_sifre']);
	$uye_id=$_POST['uye_id'];

	$duzenle=$db->prepare("UPDATE uye SET 
		uye_ad=:ad,
		uye_sifre=:sifre,
		uye_mail=:mail
		WHERE uye_id={$uye_id}
		");

	$update=$duzenle->execute(array(
		'ad' => $_POST['uye_ad'],
		'sifre' => $uye_sifre,
		'mail' => $_POST['uye_mail']
		));

	

	if ($update)
	{
		header("location: ../../hesap.php?uye_id=$uye_id&durum=duzenlendi");
	}
	else
	{
		header("location: ../../hesap.php?uye_id=$uye_id&durum=duzenlenemedi");
	}	
}
?>