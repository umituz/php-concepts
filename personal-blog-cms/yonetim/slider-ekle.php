<?php 
include 'header.php';
?>


<div class="container body">
  <div class="main_container">

   <?php include 'sidebar.php'; include 'navigasyon.php'; ?>

   <!-- page content -->
   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>SLIDER</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Slider Ekle</h3> 

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/ekle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="file" name="slider_resimyol" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Adı
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="slider_ad" placeholder="Slider adını giriniz..." required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Linki
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="slider_link" placeholder="Eğer slider linki varsa, linki giriniz..." class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sırası
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="slider_sira" value="0" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durumu
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="slider_durum" required>
                      <option value="1">AKTİF</option>
                      <option value="0">PASİF</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   <button type="submit" name="slider-ekle" style="font-weight:bolder;" class="btn btn-success">
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