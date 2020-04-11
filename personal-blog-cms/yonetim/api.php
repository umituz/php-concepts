<?php 
include 'header.php';
$apisor=$db->prepare("SELECT * FROM api");
$apisor->execute();
$apicek=$apisor->fetch(PDO::FETCH_ASSOC);
extract($apicek);

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
              <h3>Api Ayarları 
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
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Google Recapctha
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="api_recapctha" value="<?php echo $api_recapctha; ?>" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Google Map
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="api_googlemap" value="<?php echo $api_googlemap; ?>" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Google Analysctic
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="api_analystic" value="<?php echo $api_analystic; ?>" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>              

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="api-duzenle" class="btn btn-primary">Güncelle</button>
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