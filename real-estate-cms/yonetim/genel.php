<?php 
include 'header.php';
$ayarsor=$db->prepare("SELECT * FROM ayar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
extract($ayarcek);

$yonetmensor=$db->prepare("SELECT * FROM yonetmen WHERE yonetmen_ad=:yonetmen_ad and yonetmen_durum=:yonetmen_durum and yonetmen_yetki=:yonetmen_yetki");
$yonetmensor->execute(array('yonetmen_ad' => $yonetmen_ad, 'yonetmen_durum' => 1, 'yonetmen_yetki' => 1));
$say=$yonetmensor->rowCount();
if ($say==0) {
  header("Location: yetkisiz.php");
  exit;
}
$yonetmencek=$yonetmensor->fetch(PDO::FETCH_ASSOC);
extract($yonetmencek);
?>


<div class="container body">
  <div class="main_container">

   <?php include 'sidebar.php'; include 'navigasyon.php'; ?>

   <!-- page content -->
   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>AYARLAR</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Genel Ayarlar

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
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo<br/>
                    375x175px
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php 
                    if (strlen($ayar_logo)>0) { ?>
                    <img style="width:375px; height: 175px;" src="../dosyalar/resimler/logo/<?php echo $ayar_logo; ?>" alt="">
                    <?php } else { ?>
                    <img style="width:375px; height: 175px;" src="../dosyalar/resimler/logo/logoyok.png" alt="">
                    <?php } ?>

                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="file" name="ayar_logo" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div> 



                <div align="right" class="form-group">
                  <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3">
                   <button type="submit" name="logo-duzenle" style="font-weight:bolder;" class="btn btn-primary">
                     <i class="success fa fa-edit fa-1x"></i> Logo Güncelle</button>
                   </div>
                 </div>

               </form>

               <div class="ln_solid"></div>

               <form action="islemler/duzenle.php" method="post" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Adresi
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="ayar_siteurl" value="<?php echo $ayar_siteurl; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="ayar_title" value="<?php echo $ayar_title; ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklaması
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="ayar_description"  value="<?php echo $ayar_description; ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Anahtar Kelimeleri
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="ayar_keywords"  value="<?php echo $ayar_keywords; ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Alt Kısım
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="ayar_footer"  value="<?php echo $ayar_footer; ?>" required="" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Yapımcısı
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="ayar_author"  value="<?php echo $ayar_author; ?>" disabled="" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durumu
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="ayar_slider" required>
                      <option value="1" <?php echo $ayar_slider == 1 ? 'selected' : null; ?>>AKTİF</option>
                      <option value="0" <?php echo $ayar_slider == 0 ? 'selected' : null; ?>>PASİF</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="genelayar-duzenle" class="btn btn-primary">Güncelle</button>
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