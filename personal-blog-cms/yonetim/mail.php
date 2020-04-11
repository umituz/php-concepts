<?php 
include 'header.php';

$mailsor=$db->prepare("SELECT * FROM mail");
$mailsor->execute();
$mailcek=$mailsor->fetch(PDO::FETCH_ASSOC);
extract($mailcek);

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
              <h3>Mail Ayarları 
                <?php
                if ($_GET['durum']=="duzenlendi")
                {
                  echo "<font size='2' color='green'><b>Güncellemeler Başarıyla Kaydedildi</b></font>";
                } 
                elseif ($_GET['durum']=="duzenlenemedi")
                {
                  echo "<font size='2' color='red'><b>Maalesef, Güncellenirken Bir Hatayla Karşılaşıldı.</b></font>";
                }
                ?> 
              </h3>                   
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/duzenle.php" method="post" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mail Sunucu
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="mail_sunucu" value="<?php echo $mail_sunucu; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mail Kullanıcı
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="mail_kullanici" value="<?php echo $mail_kullanici; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>  

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mail Şifre
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="mail_sifre" value="<?php echo $mail_sifre; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>                      

                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mail Port
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="mail_port" value="<?php echo $mail_port; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div> 

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="mail-duzenle" class="btn btn-primary">Güncelle</button>
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