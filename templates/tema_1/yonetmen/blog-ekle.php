<?php 
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik INNER JOIN kategoriler ON kategori_id=icerik_kategori_id where icerik_id=:icerik_id ");
$iceriksor->execute(array(
'icerik_id' => $_GET['icerik_id']
  ));
$say=$iceriksor->rowCount();
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
 ?>
<head>
    <script src="programlar/ckeditor/ckeditor.js" ></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Blog</h3>
              </div>             
            </div>

            <div class="clearfix"></div>

            <div style="margin-top: 30px;" class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Blog Ekle</h2>
                    <ul class="nav navbar-right">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form action="islemler/ekle.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> 

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Resim Seç</label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="file" id="first-name" required="" name="icerik_resimyol" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                    

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik Zaman</label>
                        
                         <div class="col-md-3">
                           <input type="date" id="first-name" required="" name="icerik_tarih" value="<?php echo date('Y-m-d'); ?>" class="form-control col-md-7 col-xs-12">
                         </div>

                         <div class="col-md-2">
                           <input type="time" id="first-name" required="" name="icerik_saat" value="<?php echo date("H:i:s"); ?>" class="form-control col-md-7 col-xs-12">
                         </div>
                          
                       </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik Adı</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="" name="icerik_ad" value="<?php echo $icerikcek['icerik_ad']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik Özeti</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="icerik_ozet" class="form-control col-md-7 col-xs-12" rows="3"><?php echo $icerikcek['icerik_ozet']; ?></textarea>
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik Detayları</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <textarea class="ckeditor" id="editor1" required="" name="icerik_detay">
                                   <?php echo $icerikcek['icerik_detay']; ?>                     
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

                       <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik Keywords</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="" name="icerik_keywords" value="<?php echo $icerikcek['icerik_keywords']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik Kategorisi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="icerik_kategori_id" required="">
                          <option>Bir Kategori Seç</option>
                          <?php 
                            $kategorisor=$db->prepare("SELECT * FROM kategoriler");
                            $kategorisor->execute();
                            while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)){?>

                            <option value="<?php echo $kategoricek['kategori_id']; ?>">
                              <?php echo $kategoricek['kategori_ad']; ?>
                            </option> 

                          <?php } ?>    

                          </select>
                        </div>
                      </div>                


                      <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                        <input type="submit" name="blog-ekle" value="Yeni Ekle" class="btn btn-success">
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
       