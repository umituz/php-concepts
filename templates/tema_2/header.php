<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title><?php echo $ayarcek['ayar_title']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="linkler/fonts/Bebas/stylesheet.css">
	<link rel="stylesheet" href="linkler/fonts/HelveticaNeue/font.css">
	<link rel="stylesheet" href="linkler/css/font-awesome.min.css">
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="linkler/css/owl.carousel.css">
	<link rel="stylesheet" href="linkler/css/owl.theme.css">
	<!-- Color box-->
	<link rel="stylesheet" href="linkler/css/colorbox.css" />
	<!-- responsive tabs -->
	<link type="text/css" rel="stylesheet" href="linkler/css/responsive-tabs.css" />
	<!-- home slider-->
	<link href="linkler/css/pgwslider.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" media="screen">	
	<link href="responsive.css" rel="stylesheet" media="screen">		
</head>

<body>
	
	<!-- facebook javascript code-->

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=549094108454486";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- facebook javascript code-->