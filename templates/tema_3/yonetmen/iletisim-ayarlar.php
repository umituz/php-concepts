<?php 
include 'header.php';
 ?>
<head>
    <script src="programlar/ckeditor/ckeditor.js" ></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Genel Ayarlar</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div style="margin-top: 30px;" class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hakkımda Detayları<small>
                       <?php
                        if ($_GET['durum']=="duzenlendi")
                        {
                          echo "<font color='green'><b>Güncellemeler Başarıyla Kaydedildi</b></font>";
                        } 
                        elseif ($_GET['durum']=="duzenlenemedi")
                        {
                          echo "<font color='red'><b>Maalesef, Güncellenirken Bir Hatayla Karşılaşıldı.</b></font>";
                        }

                       ?>                  
                    </small></h2>
                    <ul class="nav navbar-right">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                     <form action="islemler/duzenle.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Telefon Numarası</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Gsm Numarası</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="ayar_gsm" value="<?php echo $ayarcek['ayar_gsm']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Faks Numarası</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="ayar_faks" value="<?php echo $ayarcek['ayar_faks']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mail Adresi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Adres</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> İlçe</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="ayar_ilce" value="<?php echo $ayarcek['ayar_ilce']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                       </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> İl</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="ayar_il" value="<?php echo $ayarcek['ayar_il']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                       </div>

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <input type="submit" name="iletisim-duzenle" value="Güncelle" class="btn btn-primary">
                      </div>

                     </form> 

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php include 'footer.php'; ?>
       