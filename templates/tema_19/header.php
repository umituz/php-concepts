<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>" />
  <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title><?php echo $ayarcek['ayar_title']; ?></title>

        <!-- BOOTSTRAP CORE STYLE  -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONT AWESOME STYLE  -->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- ANIMATE STYLE  -->
        <link href="assets/css/animate.css" rel="stylesheet" />
        <!-- FLEXSLIDER STYLE  -->
        <link href="assets/css/flexslider.css" rel="stylesheet" />
        <!-- CUSTOM STYLE  -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <!-- GOOGLE FONTS  -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
        
      </head>
      <body>

       <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">

              <img src="assets/img/logo.png" />
            </a>

          </div>
          <div class="right-div">
            <strong>Destek : </strong>  <?php echo $ayarcek['ayar_mail']; ?>
          </div>
          
        </div>
      </div>
      <!-- LOGO HEADER END-->
      <section class="menu-section">
        <div class="container">
          <div class="row ">
            <div class="col-md-12">
              <div class="navbar-collapse collapse ">
                <ul id="menu-top" class="nav navbar-nav navbar-right">
                  <li><a href="index.php" class="menu-top-active" >Anasayfa</a></li>
                  
                  <li><a href="hakkimizda.php">Hakkımızda</a></li>
                  <li><a href="galeri.php" >Galeri</a></li>
                  <li><a href="ozellikler.php">Özellikler</a></li>
                  <li><a href="iletisim.php">İletişim</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- MENU SECTION END-->