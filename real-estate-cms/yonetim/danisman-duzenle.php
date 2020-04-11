<?php 
include 'header.php';
$yonetmensor=$db->prepare("SELECT * FROM yonetmen WHERE yonetmen_id=:yonetmen_id and yonetmen_ad=:yonetmen_ad and yonetmen_durum=:yonetmen_durum and yonetmen_yetki=:yonetmen_yetki");
$yonetmensor->execute(array(
  'yonetmen_id' => $_GET['yonetmen_id'],
  'yonetmen_ad' => $yonetmen_ad,
  'yonetmen_durum' => 1,
  'yonetmen_yetki' => 1
  ));
$say=$yonetmensor->rowCount();
if ($say==0) {
  header("Location: yetkisiz.php");
  exit;
}
$yonetmencek=$yonetmensor->fetch(PDO::FETCH_ASSOC);
extract($yonetmencek);
?>
<head>
  <script src="programlar/ckeditor/ckeditor.js" ></script>
</head>

<div class="container body">
  <div class="main_container">

   <?php include 'sidebar.php'; include 'navigasyon.php'; ?>

   <!-- page content -->
   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>SATIŞ DANIŞMANI</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Satış Danışmanı Düzenle
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
              <form action="islemler/duzenle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç
                  </label>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="file" name="yonetmen_resimyol" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <input type="hidden" name="yonetmen_id" value="<?php echo $yonetmen_id; ?>">
                <input type="hidden" name="yonetmen_resimyol" value="<?php echo $yonetmen_resimyol; ?>">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kullanıcı Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="yonetmen_ad" readonly="" value="<?php echo $yonetmen_ad; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>  

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Şifre
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="password" name="yonetmen_sifre" value="<?php echo $yonetmen_sifre; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>  

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Danışman İsim
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="yonetmen_adsoyad" value="<?php echo $yonetmen_adsoyad; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Danışman Hakkında</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" required="" name="yonetmen_detay">
                      <?php echo $yonetmen_detay; ?>
                    </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Danışman Telefon
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="yonetmen_tel" value="<?php echo $yonetmen_tel; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Danışman Mail
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="yonetmen_mail" value="<?php echo $yonetmen_mail; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Danışman Durumu
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select id="heard" class="form-control" name="yonetmen_durum" required>
                      <option value="1" <?php echo $yonetmen_durum == 1 ? 'selected' : null; ?>>AKTİF</option>
                      <option value="0" <?php echo $yonetmen_durum == 0 ? 'selected' : null; ?>>PASİF</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                    <button type="submit" name="danisman-duzenle" style="font-weight:bolder;" class="btn btn-primary">
                     <i class="success fa fa-edit fa-1x"></i> Güncelle</button>
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