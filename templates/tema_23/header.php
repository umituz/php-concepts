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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $ayarcek['ayar_title']; ?></title>

	<!-- CSS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:700,400">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/elegant-font/code/style.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/flexslider/flexslider.css">
	<link rel="stylesheet" href="assets/css/form-elements.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/media-queries.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

            <!-- Favicon and touch icons -->
            <link rel="shortcut icon" href="assets/ico/favicon.png">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
            <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        </head>

        <body>

        	<!-- Top menu -->
        	<nav class="navbar" role="navigation">
        		<div class="container">
        			<div class="navbar-header">
        				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        				</button>
        				<a class="navbar-brand" href="index.php">Ümit UZ</a>
        			</div>
        			<!-- Collect the nav links, forms, and other content for toggling -->
        			<div class="collapse navbar-collapse" id="top-navbar-1">
        				<ul class="nav navbar-nav navbar-right">						
        					<li class="active">
        						<a href="index.php"><span aria-hidden="true" class="icon_house"></span><br>Anasayfa</a>
        					</li>
        					<li>
        						<a href="referanslar.php"><span aria-hidden="true" class="icon_camera"></span><br>Referanslar</a>
        					</li>
        					<li>
        						<a href="servisler.php"><span aria-hidden="true" class="icon_tools"></span><br>Servisler</a>
        					</li>
        					<li>
        						<a href="hakkimizda.php"><span aria-hidden="true" class="icon_profile"></span><br>Hakkımızda</a>
        					</li>
        					<li>
        						<a href="iletisim.php"><span aria-hidden="true" class="icon_mail"></span><br>İletişim</a>
        					</li>
        				</ul>
        			</div>
        		</div>
        	</nav>