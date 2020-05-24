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
<html lang="en">
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
    <body>


      <!--Header section  -->
      <div class="container" id="home">
        <div class="row text-center">
          <div class="col-md-12" >
            <h1 class="head-main"> <i class="fa fa-desktop fa-2x"></i> ÜMİT UZ</h1>
            <h2 class="head-sub-main">Selam Benim İsmİm Yukarıda Yazılıdır.</h2>


          </div>


        </div>
      </div>
      <!--End Header section  -->

      <!-- Navigation -->
      <nav class="navbar-inverse" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">ÜMİT UZ</a>
          </div>
          <!-- Collect the nav links for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#home">Anasayfa</a>
              </li>
              <li><a href="#about">Hakkımızda</a>
              </li>                    

              <li><a href="#work-sec">Referanslar</a>
              </li>
              <li><a href="#contact-sec">İletişim</a>
              </li>
              <li><a href="#map-sec">Harita</a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav> 
     <!--End Navigation -->