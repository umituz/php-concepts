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

    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

            <div class="container">
                <div class="site-header">
                    <div class="logo">
                        <h1>HayaL KurmaK BedaVa</h1>
                    </div>
                    <div class="menu">
                        <div class="navbar">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <i class="fw-icon-th-list"></i>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li class="active"><a href="#">Anasayfa</a></li>
                                    <li><a href="#">Hakkımızda</a></li>
                                    <li><a href="#">Hizmetler</a></li>
                                    <li><a href="#">Referanslar</a></li>
                                    <li><a href="#">İletişim</a></li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                        <div class="mini-menu">
                            <label>
                              <select class="selectnav">
                                <option value="#" selected="">Anasayfa</option>
                                <option value="#">Hakkımızda</option>
                                <option value="#">→ Another action</option>
                                <option value="#">→ Something else here</option>
                                <option value="#">→ Another action</option>
                                <option value="#">→ Something else here</option>
                                <option value="#">Hizmetler</option>
                                <option value="#">Referanslar</option>
                                <option value="#">İletişim</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
        </div>