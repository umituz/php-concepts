<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title><?php echo $ayarcek['ayar_title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
  <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
  <link href='http://fonts.googleapis.com/css?family=Lato|Fjalla+One' rel='stylesheet' type='text/css'>
  <!-- Le styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <![endif]-->

    </head>

    <body>
      <!-- Main menu starts here -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container "><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span><img src="img/menu-icon.png" width="22" height="23"></span>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#" class="active">Anasayfa</a></li>
              <li><a href="#">Hakkımızda</a></li>
              <li><a href="#">Hzmetler</a></li>
              <li><a href="#">Sayfalar</a></li>
              <li><a href="#">Hizmetler</a></li>
              <li><a href="#">İletişim</a></li>
            </ul>
          </div>
          <div class="search">
            <form class="navbar-search">
              <input type="text" class="search-query" placeholder="Bri şeyler arayın...">
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- Main Menu end -->