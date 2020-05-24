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
<title><?php echo $ayarcek['ayar_title']; ?></title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/animation.css">
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/contact-form.css">
<link rel="stylesheet" href="css/touchTouch.css">
<link rel="stylesheet" href="css/style.css">
  <script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>
<script src="js/camera.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('.gallery .gall_item').touchTouch();
 });
 $(document).ready(function(){
     jQuery('#camera_wrap').camera({
      loader: false,
      pagination: true ,
      minHeight: '500',
      thumbnails: false,
      height: '44.42708333333333%',
      caption: true,
      navigation: false,
      fx: 'mosaic'
    });
    $('.gallery .gall-item').touchTouch();
  });
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="texture">
<!--==============================
              header
=================================-->
<header id="home" class="page">
  <div class="navigation single-page-nav">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="logo">
          <a href="index.php">Ümit UZ</a>
        </h3>
        <nav>
          <ul>
           <li><a href="#home" class="current">Anasayfa</a></li>
           <li><a href="#portfolio">Referanslar</a></li>
           <li><a href="#skills">Beceriler</a></li>
           <li><a href="#experience">Tecrübeler</a></li>
           <li><a href="#testimonials">Ne Söylediler</a></li>
           <li><a href="#contacts">İletişim</a></li>
         </ul>
        </nav>
      </div>
    </div>
  </div>
  <div id="camera_wrap">
    <div data-src="images/slide-1.jpg">
      <div class="caption fadeIn">Your Photographer <span class="bull"></span> Coder  <span class="bull"></span> Designer</div>
    </div>
    <div data-src="images/slide-2.jpg">
      <div class="caption fadeIn">Impressive Designs, Suitable for Cool Projects</div>
    </div>
    <div data-src="images/slide-3.jpg">
      <div class="caption fadeIn">Designs that Work for Your Benefits</div>
    </div>
  </div>
</header>