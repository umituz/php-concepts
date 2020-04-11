<?php 
include 'header.php';
$emlaksor=$db->prepare("SELECT * FROM emlak where emlak_id=:emlak_id");
$emlaksor->execute(array(
  'emlak_id' => $_GET['emlak_id']
  ));
$emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC);
extract($emlakcek);
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
          <h3>EMLAK</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Emlak Düzenle <?php
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


                <input type="hidden" name="emlak_id" value="<?php echo $emlak_id; ?>">
                <input type="hidden" name="emlak_resimyol" value="<?php echo $emlak_resimyol; ?>">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yüklü Resim
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <img style="width:300px; height: 200px;" src="../dosyalar/resimler/emlak/<?php echo $emlak_resimyol; ?>" alt="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Resim Seç
                  </label>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="file" name="emlak_resimyol" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Emlak Başlık
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="emlak_ad" value="<?php echo $emlak_ad; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Emlak Detay</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" name="emlak_detay">
                      <?php echo $emlak_detay; ?>
                    </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Emlak Adres
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="emlak_adres" value="<?php echo $emlak_adres; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Emlak Fiyat
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="emlak_fiyat" value="<?php echo $emlak_fiyat; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>              

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12">Emlak Durumu
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select id="heard" class="form-control" name="emlak_durum" required>
                      <option value="SATILIK" <?php echo $emlak_durum == "SATILIK" ? 'selected' : null; ?>>SATILIK</option>
                      <option value="KİRALIK" <?php echo $emlak_durum == "KİRALIK" ? 'selected' : null; ?>>KİRALIK</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                   <button type="submit" name="emlak-duzenle" style="font-weight:bolder;" class="btn btn-primary">
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