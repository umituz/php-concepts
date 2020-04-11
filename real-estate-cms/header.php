<?php 
include 'yonetim/islemler/baglan.php';
include 'yonetim/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
extract($ayarcek);

$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
extract($iletisimcek);

$sosyalsor=$db->prepare("SELECT * FROM sosyal");
$sosyalsor->execute();
$sosyalcek=$sosyalsor->fetch(PDO::FETCH_ASSOC);
extract($sosyalcek);

$emlaksor=$db->prepare("SELECT * FROM emlak ORDER BY emlak_zaman DESC");
$emlaksor->execute();
$emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC);
extract($emlakcek);
$yonetmen_id=$yonetmen_id;
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	

	<title><?php echo $ayar_title; ?></title>	

	<meta name="keywords" content="<?php echo $ayar_keywords; ?>" />
	<meta name="description" content="<?php echo $ayar_description; ?>">
	<meta name="author" content="<?php echo $ayar_author; ?>">

	<!-- Favicon -->
	<link rel="shortcut icon" href="dosyalar/resimler/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="linkler/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="linkler/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="linkler/animate/animate.min.css">
	<link rel="stylesheet" href="linkler/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="linkler/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="linkler/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="linkler/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="linkler/css/theme.css">
	<link rel="stylesheet" href="linkler/css/theme-elements.css">
	<link rel="stylesheet" href="linkler/css/theme-blog.css">
	<link rel="stylesheet" href="linkler/css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="linkler/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="linkler/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="linkler/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="linkler/css/skins/skin-real-estate.css"> 

	<!-- Demo CSS -->
	<link rel="stylesheet" href="linkler/css/demos/demo-real-estate.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="linkler/css/custom.css">

	<!-- Head Libs -->
	<script src="linkler/modernizr/modernizr.min.js"></script>

</head>
<body class="loading-overlay-showing" data-loading-overlay>
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<div class="body">
		<header id="header" class="header-narrow" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 37, "stickySetTop": "-37px", "stickyChangeLogo": false}'>
			<div class="header-body background-color-primary pt-none pb-none">
				<div class="header-top header-top header-top-style-3 header-top-custom background-color-primary m-none">
					<div class="container">
						<nav class="header-nav-top pull-left">
							<ul class="nav nav-pills">
								<li class="hidden-xs">
									<span class="ws-nowrap"><i class="icon-location-pin icons"></i> <?php echo $iletisim_adres." ".$iletisim_ilce."/".$iletisim_il ; ?></span>
								</li>
								<li>
									<span class="ws-nowrap"><i class="icon-call-out icons"></i> <?php echo $iletisim_tel; ?></span>
								</li>
								<li class="hidden-xs">
									<span class="ws-nowrap"><i class="icon-envelope-open icons"></i> <a class="text-decoration-none" href="mailto:<?php echo $iletisim_mail; ?>"><?php echo $iletisim_mail; ?></a></span>
								</li>
							</ul>
						</nav>
						<nav class="header-nav-top langs pull-right mr-none">
							<ul class="nav nav-pills">
								<li>
									<a href="#" class="dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										English
										<i class="fa fa-sort-down"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
										<li>
											<a href="#english"><img src="img/blank.gif" class="flag flag-us" alt="English"> English</a>
										</li>
										<li>
											<a href="#espanol"><img src="img/blank.gif" class="flag flag-es" alt="Español"> Español</a>
										</li>
										<li>
											<a href="#francaise"><img src="img/blank.gif" class="flag flag-fr" alt="Française"> Française</a>
										</li>
									</ul>
								</li>
								<li class="blog">
									<a href="#">
										Blog
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<?php include 'navigasyon.php'; ?>
			</div>
		</header>