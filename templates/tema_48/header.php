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
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title><?php echo $ayarcek['ayar_title']; ?></title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
                 
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>İletişim: <strong><?php echo $ayarcek['ayar_tel']; ?></strong> | <strong><?php echo $ayarcek['ayar_mail']; ?></strong></p>
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="icon-facebook_circle"></i></a>
                     <a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="icon-twitter_circle"></i></a>
                     <a href="<?php echo $ayarcek['ayar_google']; ?>"><i class="icon-google_plus_circle"></i></a>
                     <a href="<?php echo $ayarcek['ayar_instagram']; ?>"><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>Ümit</strong>UZ</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li class="active-item"><a href="#carousel">Anasayfa</a></li>
                     <li><a href="#features">Özellikler</a></li>
                     <li><a href="#about-us">Hakkımızda</a></li>
                     <li><a href="#our-work">Referanslar</a></li>
                     <li><a href="#services">Hizmetler</a></li>
                     <li><a href="#contact">İletişim</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>  