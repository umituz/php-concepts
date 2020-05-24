<?php 
include 'header.php';
$hakkimdasor=$db->prepare("SELECT * FROM hakkimda where hakkimda_id=?");
$hakkimdasor->execute(array(0));
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);
 ?>
<head>
    <script src="programlar/ckeditor/ckeditor.js" ></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hakkımda</h3>
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
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Hakkımda Başlık</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="" name="hakkimda_ad" value="<?php echo $hakkimdacek['hakkimda_ad']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Hakkımda Detay</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <textarea class="ckeditor" id="editor1" required="" name="hakkimda_detay">
                           <?php echo $hakkimdacek['hakkimda_detay']; ?>                             
                           </textarea>
                          </div>
                      </div>

                      <script type="text/javascript">
                          CKEDITOR.replace
                          ('editor1',
                            {
                              filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                              filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                              filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                              filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                              filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                              filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                              forcePasteAsPlainText : true

                            }
                          );
                        </script>



                      <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                        <input type="submit" name="hakkimda-duzenle" value="Güncelle" class="btn btn-primary">
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
       