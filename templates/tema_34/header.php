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
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
 <!-- meta charec set -->
 <meta charset="utf-8">
 <!-- Always force latest IE rendering engine or request Chrome Frame -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <!-- Page Title -->
 <title><?php echo $ayarcek['ayar_title']; ?></title>		
 <!-- Meta Description -->
 <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
 <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
 <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
 <!-- Mobile Specific Meta -->
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Google Font -->

 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>

  </head>

  <body id="body">

    <!-- preloader -->
    <div id="preloader">
     <img src="img/preloader.gif" alt="Preloader">
   </div>
   <!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
          <div class="container">
            <div class="navbar-header">
              <!-- responsive nav button -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
              </button>
              <!-- /responsive nav button -->

              <!-- logo -->
              <a class="navbar-brand" href="#body">
                <h1 id="logo">
                 <img src="img/logo.png" alt="Brandi">
               </h1>
             </a>
             <!-- /logo -->
           </div>

           <!-- main nav -->
           <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
              <li class="current"><a href="#body">Anasayfa</a></li>
              <li><a href="#features">Özellikler</a></li>
              <li><a href="#works">Referanslar</a></li>
              <li><a href="#team">Ekip</a></li>
              <li><a href="#contact">İletişim</a></li>
            </ul>
          </nav>
          <!-- /main nav -->

        </div>
      </header>
        <!--
        End Fixed Navigation
        ==================================== -->