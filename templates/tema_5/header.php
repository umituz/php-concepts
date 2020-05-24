<?php 
include 'yonetmen/islemler/baglan.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="tr">
<head>
  <title><?php echo $ayarcek['ayar_title']; ?> </title>
  <!-- Meta Tags Begin -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="">
  <meta name="robots" content="index follow">
  <meta name="description" content="">
  <!-- Link tags begin -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="js/jquery-2.1.4.min.js"> </script>
</head>
<body>
  <div id="rel">
    <div class="mobile-nav">
      <i class="fa fa-times"> </i>
      <ul>
        <li class="port"><a href="#"> Referanslar </a> </li>
        <li><a href="hakkimizda.php"> Hakkımızda </a> </li>
        <li><a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"> İletişim </a> </li>
      </ul>
    </div>
  </div>

  <div class="pos-fixed">
    <div class="container">
      <div class="logo"><a href='/'> <span class="blue">Ümit</span>UZ </a> </div>
      <div id="toggle">
        <i class="fa fa-bars fa-2x"> </i>
      </div>
      <!-- toggle for mobile end above -->
      <!-- navigation links start below -->
      <nav>
        <ul>
          <li class="port"><a href="#"> Referanslar </a> </li>
          <li><a href="hakkimizda.php"> Hakkımızda </a> </li>
          <li><a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"> İletişim </a> </li>
        </ul>
      </nav>
      <!-- navigation end -->
      <!-- end of container below -->
    </div>
    <!-- end of pos-fixed -->
  </div>
  <!-- begin header -->
  <header>
    <div class="header">
      <h1> Ben Ümit UZ</h1>
      <div class="button pos-button scroll-port"> Referanslara Göz Atın</div>
      <!-- ends header below -->
    </div>
  </header>
    <!-- end header -->