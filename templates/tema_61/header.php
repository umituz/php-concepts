<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $ayarcek['ayar_title']; ?></title>
  <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" href="css/custom-styles.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/component.css">
  <link rel="stylesheet" href="css/font-awesome-ie7.css">

  <script src="js/modernizr.custom.js"></script>
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

            <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
            <div class="header-wrapper">
              <div class="container">
                <div class="row-fluid">

                  <div class="site-name">
                  <h1>BENİM ADIM ÜMİT ben yaparım</h1>
                  </div>


                  <div class="menu-icons">
                    <ul>
                      <li><a href="#"><i class="fw-icon-facebook i"></i></a> </li>
                      <li><a href="#"><i class="fw-icon-twitter i"></i></a> </li>
                      <li><a href="#"><i class="fw-icon-linkedin i"></i></a> </li>
                      <li>
                        <form id="custom-search-form" class="form-search form-horizontal pull-right">
                          <div class="input-append">
                            <input type="text" class="search-query">
                            <button type="submit" class="btn"><i class="fw-icon-search"></i></button>
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <div class="cust-form">
                    <form id="custom-search-form" class="form-search form-horizontal pull-right">

                      <input type="text" class="search-query">
                      <button type="submit" class="btn"><i class="fw-icon-search"></i></button>

                    </form>
                  </div>

                </div>
              </div>
            </div>
            