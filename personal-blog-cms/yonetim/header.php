<?php 
ob_start();
session_start();
include 'islemler/baglan.php';
include 'islemler/ayar.php';
date_default_timezone_set('Europe/Istanbul');
$yonetmen_ad=$_SESSION["yonetmen_ad"];
$yonetmensor=$db->prepare("SELECT * FROM yonetmen WHERE yonetmen_ad=:yonetmen_ad and yonetmen_durum=:yonetmen_durum");
$yonetmensor->execute(array('yonetmen_ad' => $yonetmen_ad, 'yonetmen_durum' => 1));
$say=$yonetmensor->rowCount();
if ($say==0) {
  header("Location: giris.php");
  exit;
}
$yonetmencek=$yonetmensor->fetch(PDO::FETCH_ASSOC);
extract($yonetmencek);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo SITE_TITLE ?></title>
  <!-- jQuery -->
  <script src="linkler/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <link href="linkler/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="linkler/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Dropzone.js -->
  <link href="linkler/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="linkler/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="linkler/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">