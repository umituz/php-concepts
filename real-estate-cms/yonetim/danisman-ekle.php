<?php 
include 'header.php';
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
              <h3>Satış Danışmanı Ekle</h3> 

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/ekle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç
                  </label>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="file" name="yonetmen_resimyol" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kayıt Tarihi
                  </label>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="date" name="yonetmen_tarih" value="<?php echo date('Y-m-d'); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="time" name="yonetmen_saat" value="<?php echo date('H:i:s'); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kullanıcı Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="yonetmen_ad" placeholder="Kullanıcı adını giriniz..." required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>  

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Şifre
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="password" name="yonetmen_sifre" placeholder="Şifreyi giriniz..." required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>  

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Danışman İsim
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="yonetmen_adsoyad" placeholder="Danışmanın tam ismini giriniz..." required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Danışman Hakkında</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" required="" name="yonetmen_detay"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Danışman Telefon
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="yonetmen_tel" placeholder="Telefon numarasını giriniz..." required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Danışman Mail
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="yonetmen_mail" placeholder="Mail adresini giriniz..." required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Danışman Durumu
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select id="heard" class="form-control" name="yonetmen_durum" required>
                      <option value="1">AKTİF</option>
                      <option value="0">PASİF</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                   <button type="submit" name="danisman-ekle" style="font-weight:bolder;" class="btn btn-success">
                     <i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button>
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