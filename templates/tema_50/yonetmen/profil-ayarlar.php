<?php 
include 'header.php';
 ?>
<head>
    <script src="programlar/ckeditor/ckeditor.js" ></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div align="right" class="col-md-12 col-sm-12 col-xs-12">
                    <h2><b><?php echo $yonetmencek['yonetmen_adsoyad']; ?> </b>İçin Profil Ayarları <small>
                       <?php
                        if ($_GET['durum']=="duzenlendi")
                        {
                          echo "<font color='green'><b>Güncellemeler Başarıyla Kaydedildi</b></font>";
                        } 
                        elseif ($_GET['durum']=="duzenlenemedi")
                        {
                          echo "<font color='red'><b>Maalesef, Güncellenirken Bir Hatayla Karşılaşıldı. Ümit UZ'dan yardım isteyin</b></font>";
                        }

                       ?>                    
                    </small></h2>
                   <a href="index.php"><i title="Geri Dön" class="fa fa-undo fa-4x"></i></a> 
                    </div>                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="islemler/duzenle.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <input type="hidden" name="yonetmen_id" value="<?php echo $yonetmencek['yonetmen_id']; ?>">

                      <input type="hidden" name="yonetmen_resimyol" value="<?php echo $yonetmencek['yonetmen_resimyol']; ?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Profil Resmi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                        <?php if (strlen($yonetmencek['yonetmen_resimyol'])>0)
                        {?> 

                        <img width="250" height="200" src="resimler/yonetmen/<?php echo $yonetmencek['yonetmen_resimyol']; ?>">
                          
                        <?php } else {?>

                        <img width="250" height="200" src="resimler/yonetmen/foto-yok.jpg">

                        <?php } ?>

                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Resim Seç</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="file" id="first-name" name="yonetmen_resimyol" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Ad ve Soyad</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="yonetmen_adsoyad" value="<?php echo $yonetmencek['yonetmen_adsoyad']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Kullanıcı Adı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" disabled="" value="<?php echo $yonetmencek['yonetmen_ad']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Kullanıcı Şifresi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="first-name" name="yonetmen_sifre" value="<?php echo $yonetmencek['yonetmen_sifre']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <input type="submit" name="profil-duzenle" value="Güncelle" class="btn btn-primary">
                      </div>

                     </form> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include 'footer.php'; ?>
       