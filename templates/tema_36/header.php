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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
  <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
  <title><?php echo $ayarcek['ayar_title']; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- CSS Implementing Plugins -->
      <link rel="stylesheet" href="assets/custom/css/flexslider.css" type="text/css" media="screen">    	
      <link rel="stylesheet" href="assets/custom/css/parallax-slider.css" type="text/css">
      <link rel="stylesheet" href="assets/font-awesome-4.0.3/css/font-awesome.min.css" type="text/css">

      <!-- Custom styles for this template -->

      <link href="assets/custom/css/business-plate.css" rel="stylesheet">
      <link rel="shortcut icon" href="assets/custom/ico/favicon.ico">
    </head>
<!-- NAVBAR
  ================================================== -->
  <body>
   <div class="top">
    <div class="container">
      <div class="row-fluid">
        <ul class="phone-mail">
          <li><i class="fa fa-phone"></i><span><?php echo $ayarcek['ayar_tel']; ?></span></li>
          <li><i class="fa fa-envelope"></i><span><?php echo $ayarcek['ayar_mail']; ?></span></li>
        </ul>
        <ul class="loginbar">
          <li><a href="#" class="login-btn">Yardım</a></li>
          <li class="devider">&nbsp;</li>
          <li><a href="#" class="login-btn">Giriş Yap</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- topHeaderSection -->	
  <div class="topHeaderSection">		
    <div class="header">			
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="assets/custom/img/logo.png" alt="My web solution" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Anasayfa</a></li>
            <li><a href="hizmetler.php">Hizmetler</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>