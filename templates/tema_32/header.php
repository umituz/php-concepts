<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="tr">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title><?php echo $ayarcek['ayar_title']; ?></title>
        <!--REQUIRED STYLE SHEETS-->
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLE CSS -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <!--ANIMATED FONTAWESOME STYLE CSS -->
        <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
        <!-- VEGAS STYLE CSS -->
        <link href="assets/scripts/vegas/jquery.vegas.min.css" rel="stylesheet" />
        <!-- SIDE MENU STYLE CSS -->
        <link href="assets/css/component.css" rel="stylesheet" />
        <!-- CUSTOM STYLE CSS -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <!-- GOOGLE FONT -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
  </head>
  <body class="cbp-spmenu-push">

    <!-- MAIN HEADING-->
    <div class="for-full-back color-bg-one" id="main-sec">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1 class="pad-adjust"><i class="fa fa-plus faa-pulse animated"></i>Ümit UZ</h1>
                </div>
            </div>
        </div>
    </div>
    <!--END MAIN HEADING-->
    <!--LEFT SLIDE MENU-->
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <h3>ümituz</h3>
        <a href="#"><?php echo $ayarcek['ayar_teL']; ?></a>
        <a href="#main-sec"><i class="fa fa-home fa-3x"></i>ANASAYFA</a>
        <a href="#about-sec"><i class="fa fa-microphone fa-3x"></i>HAKKIMIZDA</a>
        <a href="#price-sec"><i class="fa fa-dollar fa-3x"></i>ÜCRETLENDİRME</a>
        <a href="#services-sec"><i class="fa fa-rocket fa-3x"></i>HİZMETLER</a>
        <a href="#contact-sec"><i class="fa fa-globe fa-3x"></i>İLETİŞİM</a>
    </nav>

    <div class="row" id="icon-left">
        <div class="col-md-12">
            <i id="showLeftPush" class="fa fa-cut fa-4x faa-horizontal animated "></i>
        </div>
    </div>
    <!--END LEFT SLIDE MENU-->

    <!--RIGHT SLIDE MENU-->
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3>E-dünya</h3>
        <a href="#">Sosyal Medya Hesaplarım</a>
        <a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook fa-3x"></i>Facebook</a>
        <a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter fa-3x"></i>Twitter</a>
        <a href="<?php echo $ayarcek['ayar_linkedin']; ?>"><i class="fa fa-linkedin fa-3x"></i>Linked In</a>
        <a href="<?php echo $ayarcek['ayar_google']; ?>"><i class="fa fa-google-plus fa-3x"></i>Google Plus</a>
    </nav>

    <div class="row" id="icon-right">
        <div class="col-md-12">
            <i id="showRightPush" class="fa fa-paperclip fa-4x "></i>
        </div>
    </div>
    <!--END RIGHT SLIDE MENU-->