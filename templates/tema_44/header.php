<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

	<title><?php echo $ayarcek['ayar_title']; ?></title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/modernizr.custom.js"></script>
	

	
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">

  	<!-- Menu -->
  	<nav class="menu" id="theMenu">
  		<div class="menu-wrap">
  		<h1 class="logo"><a href="index.php#home">ÜMİTUZ</a></h1>
  			<i class="icon-remove menu-close"></i>
  			<a href="#home" class="smoothScroll">Anasayfa</a>
  			<a href="#about" class="smoothScroll">Hakkımızda</a>
  			<a href="#portfolio" class="smoothScroll">Referanslar</a>
  			<a href="#contact" class="smoothScroll">İletişim</a>
  			<a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="icon-facebook"></i></a>
  			<a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="icon-twitter"></i></a>
  			<a href="<?php echo $ayarcek['ayar_dribbble']; ?>"><i class="icon-dribbble"></i></a>
  			<a href="<?php echo $ayarcek['ayar_youtube']; ?>"><i class="icon-envelope"></i></a>
  		</div>

  		<!-- Menu button -->
  		<div id="menuToggle"><i class="icon-reorder"></i></div>
  	</nav>
