<?php 
include 'header.php';
?>


<div class="container body">
  <div class="main_container">

   <?php include 'sidebar.php'; include 'navigasyon.php'; ?>

   <!-- page content -->
   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>PROFİL</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3><?php echo $yonetmen_adsoyad; ?> İçin Profil Ayarları

                <?php
                if ($_GET['durum']=="duzenlendi")
                {
                  echo "<font size='3' color='green'><b>Güncellemeler Başarıyla Kaydedildi</b></font>";
                } 
                elseif ($_GET['durum']=="duzenlenemedi")
                {
                  echo "<font size='3' color='red'><b>Maalesef, Güncellenirken Bir Hatayla Karşılaşıldı.</b></font>";
                }
                ?> 
              </h3> 

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/duzenle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                <input type="hidden" name="ayar_logo" value="<?php echo $ayar_logo; ?>">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profil Resmi <br/>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php 
                    if (strlen($yonetmen_resimyol)>0) { ?>
                    <img style="width:200px; height: 200px;" src="upload/resim/yonetmen/<?php echo $yonetmen_resimyol; ?>" alt="">
                    <?php } else { ?>
                    <img style="width:200px; height: 200px;" src="upload/resim/yonetmen/fotoyok.png" alt="">
                    <?php } ?>

                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="file" name="yonetmen_resimyol" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div> 
                <input type="hidden" name="yonetmen_id" value="<?php echo $yonetmen_id; ?>">
                <input type="hidden" name="yonetmen_resimyol" value="<?php echo $yonetmen_resimyol; ?>">

                <div align="right" class="form-group">
                  <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3">
                   <button type="submit" name="profilfoto-duzenle" style="font-weight:bolder;" class="btn btn-primary">
                     <i class="success fa fa-edit fa-1x"></i> Güncelle</button>
                   </div>
                 </div>

               </form>

               <div class="ln_solid"></div>

               <form action="islemler/duzenle.php" method="post" data-parsley-validate class="form-horizontal form-label-left">

                <input type="hidden" name="yonetmen_id" value="<?php echo $yonetmen_id; ?>">
                
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Adı
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" disabled="" name="yonetmen_ad" value="<?php echo $yonetmen_ad; ?>" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="yonetmen_adsoyad" value="<?php echo $yonetmen_adsoyad; ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şifre
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="yonetmen_sifre" value="<?php echo $yonetmen_sifre; ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="profil-duzenle" class="btn btn-primary">Güncelle</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
</div>
</div>

<?php include 'footer.php'; ?>