<?php 
include 'header.php';

$sosyalsor=$db->prepare("SELECT * FROM sosyal");
$sosyalsor->execute();
$sosyalcek=$sosyalsor->fetch(PDO::FETCH_ASSOC);
extract($sosyalcek);

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
              <h3>Sosyal Medya Ayarları 
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
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Facebook
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="sosyal_facebook" value="<?php echo $sosyal_facebook; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Instagram
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="sosyal_instagram" value="<?php echo $sosyal_instagram; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Twitter
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="sosyal_twitter" value="<?php echo $sosyal_twitter; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Google
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="sosyal_google" value="<?php echo $sosyal_google; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Youtube
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="sosyal_youtube" value="<?php echo $sosyal_youtube; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> LinkedIn
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="sosyal_linkedin" value="<?php echo $sosyal_linkedin; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>  

                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Github
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="sosyal_github" value="<?php echo $sosyal_github; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>             

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="sosyalmedya-duzenle" class="btn btn-primary">Güncelle</button>
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