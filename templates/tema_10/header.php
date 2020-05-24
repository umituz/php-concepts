<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
	<meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
	<title><?php echo $ayarcek['ayar_title']; ?></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
	    <![endif]-->       
	    <link rel="shortcut icon" href="images/ico/favicon.ico">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	</head><!--/head-->

	<body>
		<header id="header" role="banner">		
			<div class="main-nav">
				<div class="container">
					<div class="header-top">
						<div class="pull-right social-icons">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>     
					<div class="row">	        		
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html">
								<img class="img-responsive" src="images/logo.png" alt="logo">
							</a>                    
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">                 
								<li class="scroll active"><a href="#home">Anasayfa</a></li>
								<li class="scroll"><a href="#explore">Keşfet</a></li>                         
								<li class="scroll"><a href="#event">Olaylar</a></li>
								<li class="scroll"><a href="#about">Hakkımızda</a></li>                     
								<li class="no-scroll"><a href="#twitter">Twitter</a></li>
								<li><a class="no-scroll" href="#" target="_blank">Biletler</a></li>
								<li class="scroll"><a href="#contact">İletişim</a></li>       
							</ul>
						</div>
					</div>
				</div>
			</div>                    
		</header>
		<!--/#header--> 