<?php 
include 'yonetmen/islemler/baglan.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<!--
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : Vijayan PP
PROJECT :A-MD
VERSION : 1.1
++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $ayarcek['ayar_title']; ?></title>
	
	<!-- [ FONT-AWESOME ICON ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="linkler/font-awesome-4.3.0/css/font-awesome.min.css">

	<!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
	<link rel="stylesheet" type="text/css" href="linkler/css/animate.css">
	<link rel="stylesheet" type="text/css" href="linkler/css/magnific-popup.css">
        <link rel ="stylesheet" type="text/css" href="linkler/vegas/vegas.min.css">
	<!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="linkler/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="linkler/bootstrap/css/bootstrap.css">
        
        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="linkler/css/style.css">
        <link rel="stylesheet" type="text/css" href="linkler/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="linkler/css/color/green.css">
        
</head>