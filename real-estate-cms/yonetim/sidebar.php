<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-check"></i> <span><?php echo $yonetmen_adsoyad; ?></span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <?php 
        if (strlen($yonetmen_resimyol)>0) { ?>
        <img class="img-circle profile_img" style="width:200px; height: 200px;" src="dosyalar/resimler/yonetmen/<?php echo $yonetmen_resimyol; ?>" alt="">
        <?php } else { ?>
        <img class="img-circle profile_img"   style="width:200px; height: 200px;" src="dosyalar/resimler/yonetmen/fotoyok.png" alt="">
        <?php } ?>
        
      </div>      
      <div class="clearfix"></div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>GENEL</h3>

        <ul class="nav side-menu">
          <li><a href="index.php"><i class="fa fa-windows"></i> Anasayfa </a></li>
          <li><a href="hakkimizda.php"><i class="fa fa-book"></i> Hakkımızda </a></li>
          <li><a href="slider.php"><i class="fa fa-image"></i> Slider İşlemleri</a></li>
          <li><a href="menu.php"><i class="fa fa-list"></i> Menü İşlemleri</a></li>
          <li><a href="icerik.php"><i class="fa fa-file-text-o"></i> İçerik İşlemleri</a></li>
          <li><a href="emlak.php"><i class="fa fa-home"></i> Emlak İşlemleri</a></li>
          <?php if ($yonetmen_yetki==1) {?>
          <li><a href="danisman.php"><i class="fa fa-user"></i> Danışman İşlemleri</a></li>
          <?php } ?>
          <!-- <li><a href="tablo.php"><i class="fa fa-table"></i> Tablo </a></li> -->
          <?php if ($yonetmen_yetki==1) {?>                  
          <li><a><i class="fa fa-wrench"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="genel.php"><i class="fa fa-cog"></i> Genel Ayarlar </a></li>
              <li><a href="iletisim.php"><i class="fa fa-phone"></i> İletişim Ayarları</a></li>
              <li><a href="api.php"><i class="fa fa-google"></i> Api Ayarları</a></li>
              <li><a href="sosyal.php"><i class="fa fa-user-plus"></i> Sosyal Medya Ayarları</a></li>
              <li><a href="mail.php"><i class="fa fa-envelope"></i> Mail Ayarları</a></li>
            </ul>
          </li>
          <?php } ?>
          <li><a href="cikis.php"><i class="fa fa-sign-out"></i> Güvenli Çıkış Yap</a></li>
        </ul>
      </div>
      <!--
      <div class="menu_section">
        <h3>Eklenecekler</h3>
        <ul class="nav side-menu">
          <li>
            <a href="javascript:void(0)"><i class="fa fa-laptop"></i> Yakında <span class="label label-success pull-right">Yakında </span></a>
          </li>
        </ul>
      </div>  -->

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