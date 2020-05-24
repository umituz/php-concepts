<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr" class="no-js">
<title><?php echo $ayarcek['ayar_title']; ?></title>
<meta name="author" content="Amit Bajracharya">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>



<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.css">


<link rel="stylesheet" href="assets/gridloading/css/component.css">
<link rel="stylesheet" href="assets/animate.css" >
<link rel="stylesheet" href="style.css">



</head>
<body>

	<!-- header -->
	<div id="top" class="header-bg fullpage">
		<div class="header fullpage">
			<div class="container">
				<div class="absolute-center">
					<div class="row">
						<div class="col-sm-7">
							<h1 class="info animated fadeInDown"><a href="" class="logo">Selam Ben <u>Ümit UZ</u></a><br><b>Web siteleri yapıyorum <span>Tasarım</span><br>Kodlama <span>Geliştirme</span></b></h1>
							<a href="#works" class="btn scroll animated bounceInUp">Çalışmalarımı Gör</a>
							<a href="#contact" class="btn scroll animated bounceInDown">İletişim</a>
							<a href="#contact" class="btn scroll animated bounceInDown">Blog</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header -->


	<div class="content-body">