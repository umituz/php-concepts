<?php 
include 'header.php';
$derssor=$db->prepare("SELECT * FROM ders INNER JOIN ders_kategori ON derskategori_id = ders_kategori  WHERE ders_id=:ders_id");
$derssor->execute(array(
  'ders_id' => $_GET['ders_id']
  ));
$derscek=$derssor->fetch(PDO::FETCH_ASSOC);
extract($derscek);
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
          <h3>DERSLER</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Ders Düzenle
                <small>
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
                </small>
              </h3> 

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/duzenle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                <input type="hidden" name="ders_id" value="<?php echo $ders_id; ?>">
                <input type="hidden" name="ders_video" value="<?php echo $ders_video; ?>">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Video Seç
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="file" name="ders_video" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ders Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="ders_ad" value="<?php echo $ders_ad; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ders Kategorisi
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">                  
                    <select id="heard" class="form-control" name="ders_kategori" required="required">
                      <?php 
                      $derskategorisor=$db->prepare("SELECT * FROM ders_kategori ORDER BY derskategori_ad ASC");
                      $derskategorisor->execute();                  
                      while ($derskategoricek=$derskategorisor->fetch(PDO::FETCH_ASSOC)) { extract($derskategoricek); ?>                      
                      <option <?php echo $ders_kategori == $derskategori_id ? 'selected' : null; ?> value="<?php echo $derskategori_id; ?>"><?php echo stripslashes($derskategori_ad); ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>      

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Ders Detayları</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" required="" name="ders_detay">
                      <?php echo $ders_detay; ?>
                    </textarea>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ders Keywords
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="ders_keywords" value="<?php echo $ders_keywords; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ders Durumu
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select id="heard" class="form-control" name="ders_durum" required>
                      <option value="1" <?php echo $ders_durum == 1 ? 'selected' : null; ?>>AKTİF</option>
                      <option value="0" <?php echo $ders_durum == 0 ? 'selected' : null; ?>>PASİF</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                    <button type="submit" name="ders-duzenle" style="font-weight:bolder;" class="btn btn-primary">
                     <i class="primary fa fa-edit fa-1x"></i> Düzenle</button>
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