<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
   <title><?php echo $ayarcek['ayar_title']; ?></title>
   <meta name="description" content="">  
   <meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
 	================================================== -->
 	<link rel="stylesheet" href="css/base.css">  
 	<link rel="stylesheet" href="css/main.css">
 	<link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->
   <script src="js/modernizr.js"></script>

   <!-- favicons
   ================================================== -->
   <link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
	================================================== -->
	<header>

		<div class="row">

			<div class="logo">
				<a href="index.php">ÜmitUZ</a>
			</div>

			<nav id="main-nav-wrap">
				<ul class="main-navigation">
					<li class="current"><a class="smoothscroll"  href="#intro" title="">Anasayfa</a></li>
					<li><a class="smoothscroll"  href="#process" title="">Aşamalar</a></li>
					<li><a class="smoothscroll"  href="#features" title="">Özellikler</a></li>
					<li><a class="smoothscroll"  href="#pricing" title="">Ücretlendirme</a></li>
					<li><a class="smoothscroll"  href="#faq" title="">Sıkça Sorulan Sorular</a></li>							
				</ul>
			</nav>

			<a class="menu-toggle" href="#"><span>Menu</span></a>

		</div>   	

   </header> <!-- /header -->