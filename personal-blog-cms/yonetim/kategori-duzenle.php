<?php 
include 'header.php';
$kategorisor=$db->prepare("SELECT * FROM kategoriler WHERE kategori_id=:kategori_id");
$kategorisor->execute(array(
  'kategori_id' => $_GET['kategori_id']
  ));
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
extract($kategoricek);
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
          <h3>KATEGORİLER</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Kategori Düzenle
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

                <input type="hidden" name="kategori_id" value="<?php echo $kategori_id; ?>">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kategori Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="kategori_ad" value="<?php echo stripslashes($kategori_ad); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>     

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Kategori Detayları</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" required="" name="kategori_detay"><?php echo stripslashes($kategori_detay); ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kategori Keywords
                 </label>
                 <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="kategori_keywords" value="<?php echo stripslashes($kategori_keywords); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                </div>
              </div>          

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kategori Anasayfa Konu
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select id="heard" class="form-control" name="kategori_anasayfa_konu" required>
                    <option value="1" <?php echo $kategori_anasayfa_konu == 1 ? 'selected' : null; ?>>ANASAYFADA GÖSTER</option>
                    <option value="0" <?php echo $kategori_anasayfa_konu == 0 ? 'selected' : null; ?>>ANASAYFADA GÖSTERME</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kategori Full Konu
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select id="heard" class="form-control" name="kategori_full_konu" required>
                    <option value="1" <?php echo $kategori_full_konu == 1 ? 'selected' : null; ?>>GÖSTER</option>
                    <option value="0" <?php echo $kategori_full_konu == 0 ? 'selected' : null; ?>>GÖSTERME</option>
                  </select>
                </div>
              </div>

              <div class="ln_solid"></div>

              <div align="right" class="form-group">
                <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                 <button type="submit" name="kategori-duzenle" style="font-weight:bolder;" class="btn btn-primary">
                   <i class="success fa fa-plus-circle fa-1x"></i> Düzenle</button>
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