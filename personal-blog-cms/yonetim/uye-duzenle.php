<?php 
include 'header.php';
$uyesor=$db->prepare("SELECT * FROM uyeler WHERE uye_id=:uye_id");
$uyesor->execute(array(
  'uye_id' => $_GET['uye_id']
  ));
$uyecek=$uyesor->fetch(PDO::FETCH_ASSOC);
extract($uyecek);
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
          <h3>ÜYELER</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Üye Düzenle
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

                <input type="hidden" name="uye_id" value="<?php echo $uye_id; ?>">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Eklenme Tarihi
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="date" name="uye_tarih" value="<?php echo date('Y-m-d'); ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="time" name="uye_saat" value="<?php echo date('H:i:s'); ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Üye Kullanıcı Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="uye_ad" value="<?php echo stripslashes($uye_ad); ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Üye Şifre
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="password" name="uye_sifre" value="<?php echo stripslashes($uye_sifre); ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Üye Mail Adresi
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="uye_mail" value="<?php echo stripslashes($uye_mail); ?>" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>  

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Üye Durumu
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select id="heard" class="form-control" name="uye_durum" required>
                      <option value="1" <?php echo $uye_durum == 1 ? 'selected' : null; ?>>ONAYLI</option>
                      <option value="0" <?php echo $uye_durum == 0 ? 'selected' : null; ?>>ONAYLI DEĞİL</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                   <button type="submit" name="uye-duzenle" style="font-weight:bolder;" class="btn btn-primary">
                     <i class="success fa fa-edit fa-1x"></i> Düzenle</button>
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