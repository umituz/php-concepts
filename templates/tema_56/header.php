<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $ayarcek['ayar_title']; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="navigation">
				<span id="mobile-navigation">&nbsp;</span>
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="menu">
					<li class="selected">
						<a href="index.php">Anasayfa</a>
					</li>
					<li>
						<a href="hakkimizda.php">Hakkımızda</a>
					</li>
					<li>
						<a href="kosu.php">Koşu</a>
						<ul>
							<li>
								<a href="runningsinglepost.html">Running single post</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="blog.php">Blog</a>
						<ul>
							<li>
								<a href="blogsinglepost.html">blog single post</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="iletisim.php">İletişim</a>
					</li>
				</ul>
			</div>
		</div>