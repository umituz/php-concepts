<?php 
include 'header.php';
$alansor=$db->prepare("SELECT * FROM ilave_alanlar WHERE alan_id=:alan_id");
$alansor->execute(array(
  'alan_id' => $_GET['alan_id']
  ));
$alancek=$alansor->fetch(PDO::FETCH_ASSOC);
extract($alancek);
?>


<div class="container body">
  <div class="main_container">

   <?php include 'sidebar.php'; include 'navigasyon.php'; ?>

   <!-- page content -->
   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>İLAVE ALANLAR</h3>
        </div>       
      </div>

      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>İlave Alan Düzenle 
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

              <input type="hidden" name="alan_id" value="<?php echo $alan_id; ?>">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> İlave Alan Adı
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="alan_ad" value="<?php echo stripslashes($alan_ad); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlave Alan Tipi
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="alan_tip" required>
                      <option value="1" <?php echo $alan_tip == 1 ? 'selected' : null; ?>>INPUT</option>
                      <option value="2" <?php echo $alan_tip == 2 ? 'selected' : null; ?>>TEXTAREA</option>
                    </select>
                  </div>
                </div>                            

                <div class="ln_solid"></div>

                <div align="right" class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="alan-duzenle" class="btn btn-primary">
                     <i class="success fa fa-edit fa-1x"></i> Düzenle</button>
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