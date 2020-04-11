<?php 
include 'header.php';
$reklamsor=$db->prepare("SELECT * FROM reklam WHERE reklam_id=:reklam_id");
$reklamsor->execute(array(
  'reklam_id' => $_GET['reklam_id']
  ));
$reklamcek=$reklamsor->fetch(PDO::FETCH_ASSOC);
extract($reklamcek);
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
          <h3>REKLAMLAR</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Reklam Düzenle
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
            <form action="islemler/duzenle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

              <input type="hidden" name="reklam_id" value="<?php echo $reklam_id; ?>">
              <input type="hidden" name="reklam_resimyol" value="<?php echo $reklam_resimyol; ?>">

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yüklü Resim
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <img style="width:300px; height: 200px;" src="upload/resim/reklam/<?php echo $reklam_resimyol; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç
                </label>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <input type="file" name="reklam_resimyol" class="form-control col-md-7 col-xs-12" ">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Reklam Adı
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="reklam_ad" value="<?php echo stripslashes($reklam_ad); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                </div>
              </div>     

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Reklam Detayları</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea class="ckeditor" id="editor1" required="required" name="reklam_detay">
                    <?php echo stripslashes($reklam_detay); ?>
                  </textarea>
                </div>
              </div>   

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Reklam Durum  
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select id="heard" class="form-control" name="reklam_durum" required>
                    <option value="1" <?php echo $reklam_durum == 1 ? 'selected' : null; ?>>AKTİF</option>
                    <option value="0" <?php echo $reklam_durum == 0 ? 'selected' : null; ?>>PASİF</option>
                  </select>
                </div>
              </div>

              <div class="ln_solid"></div>

              <div align="right" class="form-group">
                <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                 <button type="submit" name="reklam-duzenle" style="font-weight:bolder;" class="btn btn-primary">
                   <i class="success fa fa-edit fa-1x"></i> Düzenle </button>
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