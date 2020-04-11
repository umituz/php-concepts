<?php 
include 'header.php';
$referanssor=$db->prepare("SELECT * FROM referans WHERE referans_id=:referans_id");
$referanssor->execute(array(
  'referans_id' => $_GET['referans_id']
  ));
$referanscek=$referanssor->fetch(PDO::FETCH_ASSOC);
extract($referanscek);
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
          <h3>REFERANSLAR</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Referans Düzenle</h3> 

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/duzenle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                <input type="hidden" name="referans_id" value="<?php echo $referans_id; ?>">
                <input type="hidden" name="referans_resimyol" value="<?php echo $referans_resimyol; ?>">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yüklü Resim
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <img style="width:300px; height: 150px;" src="upload/resim/referans/<?php echo $referans_resimyol; ?>" alt="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç
                  </label>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="file" name="referans_resimyol" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Referans Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="referans_ad" value="<?php echo $referans_ad; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Referans Detay</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" required="" name="referans_detay">
                      <?php echo $referans_detay; ?>
                    </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Referans Linki
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="referans_link" value="<?php echo $referans_link; ?>" required="" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Referans Durumu
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select id="heard" class="form-control" name="referans_durum" required>
                      <option value="1" <?php echo $referans_durum == 1 ? 'selected' : null; ?>>AKTİF</option>
                      <option value="0" <?php echo $referans_durum == 0 ? 'selected' : null; ?>>PASİF</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                   <button type="submit" name="referans-duzenle" style="font-weight:bolder;" class="btn btn-success">
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