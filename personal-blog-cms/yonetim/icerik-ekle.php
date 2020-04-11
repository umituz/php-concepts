<?php 
include 'header.php';
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
          <h3>İÇERİK</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>İçerik Ekle</h3> 

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/ekle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="file" name="icerik_resimyol" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Zaman
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="date" name="icerik_tarih" value="<?php echo date('Y-m-d'); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="time" name="icerik_saat" value="<?php echo date('H:i:s'); ?>" required="required"  class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="icerik_ad" placeholder="İçerik adını giriniz..." required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>    

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Kategorisi
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">                  
                    <select id="heard" class="form-control" name="icerik_kategori" required="required">
                      <?php 
                      $kategorisor=$db->prepare("SELECT * FROM kategoriler ORDER BY kategori_ad ASC");
                      $kategorisor->execute();                  
                      while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { extract($kategoricek); ?>                      
                      <option value="<?php echo $kategori_id; ?>"><?php echo $kategori_ad; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik Detay</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" required="" name="icerik_detay"></textarea>
                  </div>
                </div>

                <div class="form-group">
                 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Keywords
                 </label>
                 <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="icerik_keywords" placeholder="İçerik anahtar kelimelerini giriniz..."  class="form-control col-md-7 col-xs-12" ">
                </div>
              </div>   

              <?php 
              $alansor=$db->prepare("SELECT * FROM ilave_alanlar");
              $alansor->execute();
              $alansay=$alansor->rowCount($alansor);
              if ($alansay > 0) { while ($alancek=$alansor->fetch(PDO::FETCH_ASSOC)) { extract($alancek);
                if ($alan_tip == 1) {
                 $form = '<input type="text" name="alan_'.$alan_id.'" class="form-control col-md-7 col-xs-12">';
               }elseif ($alan_tip == 2) {
                 $form = '<textarea class="form-control col-md-7 col-xs-12" name="alan_'.$alan_id.'"  rows="4"></textarea>';
               } ?>

               <div class="form-group">
                 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İlave Alan - (<?php echo $alan_ad; ?>)
                 </label>
                 <div class="col-md-9 col-sm-9 col-xs-12">
                   <?php echo $form; ?>
                 </div>
               </div>   
               <?php } } ?>     

               <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Durumu
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select id="heard" class="form-control" name="icerik_durum" required>
                    <option value="1">AKTİF</option>
                    <option value="0">PASİF</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Anasayfada Görünümü
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select id="heard" class="form-control" name="icerik_anasayfada_goster" required>
                    <option value="1" selected="">GÖSTERİLİYOR</option>
                    <option value="0">GÖSTERİLMİYOR</option>
                  </select>
                </div>
              </div>

              <div class="ln_solid"></div>

              <div align="right" class="form-group">
                <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                 <button type="submit" name="icerik-ekle" style="font-weight:bolder;" class="btn btn-success">
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