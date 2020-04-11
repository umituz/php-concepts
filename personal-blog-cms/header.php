<?php 
include 'yonetim/islemler/baglan.php';
include 'yonetim/islemler/ayar.php';
include 'yonetim/fonksiyonlar/seo.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title><?php echo SITE_TITLE ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://bootstraptaste.com" />
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- Theme skin -->
    <link href="skins/default.css" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

  </head>
  <body>
    <div id="wrapper">
       <!-- start header -->
       <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span>Ümit</span>UZ</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <?php 
                        $menusor=$db->prepare("SELECT * FROM menu ORDER BY menu_durum DESC, menu_sira ASC");
                        $menusor->execute();
                        while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { extract($menucek); ?>
                        <li><a href="<?php echo $menu_link; ?>"><?php echo $menu_ad; ?></a></li>
                        <?php }
                        $sayfasor=$db->prepare("SELECT * FROM sayfalar");
                        $sayfasor->execute();
                        while ($sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC)) { extract($sayfacek); ?>
                        <li><a href="sayfa-<?=$sayfa_link.'-'.$sayfa_id; ?>"><?php echo $sayfa_ad; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
	<!-- end header -->