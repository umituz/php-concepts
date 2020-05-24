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
                <h3>Ayarlar</h3>
              </div>            
            </div>

            <div class="clearfix"></div>

            <div style="margin-top: 30px;" class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mail SMTP Ayarları<small>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Mail SMTP Host</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ayar_smtphost" value="<?php echo $ayarcek['ayar_smtphost']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">  Mail SMTP Kullanıcı Adı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ayar_smtpuser" value="<?php echo $ayarcek['ayar_smtpuser']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">  Mail SMTP Şifre</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="first-name" name="ayar_smtppassword" value="<?php echo $ayarcek['ayar_smtppassword']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">  Mail SMTP Port+</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ayar_smtpport" value="<?php echo $ayarcek['ayar_smtpport']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <input type="submit" name="mail-duzenle" value="Güncelle" class="btn btn-primary">
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
       