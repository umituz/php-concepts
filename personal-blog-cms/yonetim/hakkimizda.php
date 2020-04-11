<?php 
include 'header.php';
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda");
$hakkimizdasor->execute();
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
extract($hakkimizdacek);
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
          <h3>HAKKIMIZDA</h3>
        </div>       
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Hakkımızda Sayfası 
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

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Başlık
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="hakkimizda_baslik" value="<?php echo $hakkimizda_baslik; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>                

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Detaylar</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" required="" name="hakkimizda_detay">
                     <?php echo $hakkimizda_detay; ?>                             
                   </textarea>
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Video</label>
                 <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="hakkimizda_video" value="<?php echo $hakkimizda_video; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Vizyon </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="hakkimizda_vizyon" value="<?php echo $hakkimizda_vizyon; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                </div>
              </div>

              <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Misyon</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="hakkimizda_misyon" value="<?php echo $hakkimizda_misyon; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                </div>
              </div>

              <div class="ln_solid"></div>

              <div align="right" class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                  <button type="submit" name="hakkimizda-duzenle" class="btn btn-primary">Güncelle</button>
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