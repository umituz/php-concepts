<?php 
ob_start();
session_start();
include 'islemler/baglan.php';
date_default_timezone_set('Europe/Istanbul');

$yonetmensor=$db->prepare("SELECT * FROM yonetmen where yonetmen_ad=:yonetmen_ad");
$yonetmensor->execute(array('yonetmen_ad' => $_SESSION['yonetmen_ad']));
$yoneticisay=$yonetmensor->rowCount();
if ($yoneticisay==0)
{
  header("location: login.php?durum=girisyok");
  exit;
}
$yonetmencek=$yonetmensor->fetch(PDO::FETCH_ASSOC);

$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title,>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>A >Q>A>>>>>>>>>Z>>D>>Alela! | </title>

    <!- Bootstrap -->
    <link href="linkler/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="linkler/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="linkler/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="linkler/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" align="center" style="border: 0; ">
              <a href="index.php" class="site_title"><span><?php echo $yonetmencek['yonetmen_ad']; ?> </span> <i class="fa fa-check"></i> </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="">
                <?php if (strlen($yonetmencek['yonetmen_resimyol'])>0)
                        {?> 

                        <img class="img-circle profile_img" src="resimler/yonetmen/<?php echo $yonetmencek['yonetmen_resimyol']; ?>">
                          
                        <?php } else {?>

                        <img class="img-circle profile_img" src="resimler/yonetmen/foto-yok.jpg">

                        <?php } ?>               
              </div>
              
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Genel</h3>
                <ul class="nav side-menu">
                 <li><a href="index.php"><i class="fa fa-windows"></i> Anasayfa </a></li>
                 <li><a href="hakkimda.php"><i class="fa fa-user"></i> Hakkımda </a></li>
                 <li><a href="slider.php"><i class="fa fa-list"></i> Slider</a></li>
                 <li><a href="blog.php"><i class="fa fa-book"></i> Haberler</a></li>
                 <li><a><i class="fa fa-cog"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="genel-ayarlar.php">Genel Ayarlar</a></li>
                      <li><a href="iletisim-ayarlar.php">İletişim Ayarları</a></li>                      
                      <li><a href="sosyalmedya-ayarlar.php">Sosyal Medya Ayarları</a></li>
                      <li><a href="mail-ayarlar.php">Mail Ayarları</a></li>
                      <li><a href="api-ayarlar.php">Api Ayarları</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php if (strlen($yonetmencek['yonetmen_resimyol'])>0)
                        {?> 

                        <img src="resimler/yonetmen/<?php echo $yonetmencek['yonetmen_resimyol']; ?>">
                          
                        <?php } else {?>

                        <img src="resimler/yonetmen/foto-yok.jpg">

                        <?php } ?> 
                      <?php echo $yonetmencek['yonetmen_ad']; ?> 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profil-ayarlar.php"> Profil</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Güvenli Çıkış</a></li>
                  </ul>
                </li>            
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->