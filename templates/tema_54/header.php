<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $ayarcek['ayar_title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>" />
	<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>" />
	<meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>" />
	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- FontAwesome Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body data-name="gototop">

	<!-- Navigation -->
	<div id="fh5co-main-nav-wrap">
		<div class="fh5co-nav-overlay"></div>
		<div class="fh5co-nav-inner">
			<ul id="fh5co-main-nav">
				<li class="active"><a href="index.php">Anasayfa</a></li>
				<li><a href="hakkimizda.php">Hakkımızda</a></li>
				<li><a href="referanslar.php">Referanslar</a></li>
				<li><a href="hizmetler.php">Hizmetler</a></li>
				<li><a href="iletisim.php">İletişim</a></li>
				<li><a href="butun-sayfalar-ozet.php">Çoklu Yapı</a></li>
			</ul>
			<ul class="fh5co-social">
				<li><a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?php echo $ayarcek['ayar_instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
				<li><a href="<?php echo $ayarcek['ayar_linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- Navigation -->

	<!-- Header -->
	<header id="fh5co-header" role="banner">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle fh5co-nav-white"><i></i></a>
		<div id="fh5co-logo" class="text-center"><a href="index.php"><img src="images/logo.png" alt="Image"></a></div>
	</header>
		<!-- Header -->