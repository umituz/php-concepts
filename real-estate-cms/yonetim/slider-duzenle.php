<?php 
include 'header.php';
$slidersor=$db->prepare("SELECT * FROM slider where slider_id=:slider_id");
$slidersor->execute(array(
  'slider_id' => $_GET['slider_id']
  ));
$say=$slidersor->rowCount();
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
extract($slidercek);
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
              <h3>Slider Düzenle

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
              <div align="right"><a href="slider.php"><button style="font-weight:bolder;" class="btn btn-warning"><i class="success fa fa-undo fa-1x"></i> Geri Dön</button></a></div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/duzenle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                <input type="hidden" name="slider_id" value="<?php echo $slider_id; ?>">
                <input type="hidden" name="slider_resimyol" value="<?php echo $slider_resimyol; ?>">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <img style="width:300px; height: 150px;" src="../dosyalar/resimler/slider/<?php echo $slider_resimyol; ?>" alt="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="file" name="slider_resimyol" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>    

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Adı
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="slider_ad" value="<?php echo $slider_ad; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Linki
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="slider_link" value="<?php echo $slider_link; ?>" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sırası
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="slider_sira" value="<?php echo $slider_sira; ?>" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durumu
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="slider_durum" required>
                      <option value="1" <?php echo $slider_durum == 1 ? 'selected' : null; ?>>AKTİF</option>
                      <option value="0" <?php echo $slider_durum == 0 ? 'selected' : null; ?>>PASİF</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   <button type="submit" name="slider-duzenle" style="font-weight:bolder;" class="btn btn-primary">
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