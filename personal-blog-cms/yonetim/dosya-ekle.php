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
          <h3>DOSYALAR</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Dosya Ekle</h3> 

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/ekle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dosya Seç
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                  <input type="file" name="dosya_konum" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Eklenme Tarihi
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="date" name="dosya_tarih" value="<?php echo date('Y-m-d'); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="time" name="dosya_saat" value="<?php echo date('H:i:s'); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Dosya Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="dosya_ad" placeholder="Dosya adını giriniz..." required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>     

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Dosya Detayları</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" required="" name="dosya_detay"></textarea>
                  </div>
                </div>   

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                   <button type="submit" name="dosya-ekle" style="font-weight:bolder;" class="btn btn-success">
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