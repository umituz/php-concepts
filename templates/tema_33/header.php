<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="tr" class="no-js"> <!--<![endif]-->
<head>
   <!-- meta character set -->
   <meta charset="utf-8">
   <!-- Always force latest IE rendering engine or request Chrome Frame -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <title><?php echo $ayarcek['ayar_title']; ?></title>		
   <!-- Meta Description -->
   <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
   <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
   <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">

   <!-- Mobile Specific Meta -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">

      <!-- preloader -->
      <div id="preloader">
        <div class="loder-box">
           <div class="battery"></div>
       </div>
   </div>
   <!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <!-- /responsive nav button -->

                  <!-- logo -->
                  <h1 class="navbar-brand">
                      <a href="#body">ÜmitUZ</a>
                  </h1>
                  <!-- /logo -->
              </div>

              <!-- main nav -->
              <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li><a href="#body">Anasayfa</a></li>
                    <li><a href="#service">Hizmetler</a></li>
                    <li><a href="#portfolio">Referanslar</a></li>
                    <li><a href="#testimonials">Ne Söylediler</a></li>
                    <li><a href="#price">Ücretlendirme</a></li>
                    <li><a href="#contact">İletişim</a></li>
                </ul>
            </nav>
            <!-- /main nav -->

        </div>
    </header>
        <!--
        End Fixed Navigation
        ==================================== -->
