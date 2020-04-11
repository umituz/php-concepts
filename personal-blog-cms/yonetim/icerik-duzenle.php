<?php 
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik INNER JOIN kategoriler ON kategori_id = icerik_kategori  WHERE icerik_id=:icerik_id");
$iceriksor->execute(array(
  'icerik_id' => $_GET['icerik_id']
  ));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
extract($icerikcek);

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
          <h3>İÇERİK</h3>
        </div>
      </div>
      <div class="clearfix"></div>

      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>İçerik Düzenle
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
              <div align="right"><a href="icerik.php"><button style="font-weight:bolder;" class="btn btn-warning"><i class="success fa fa-undo fa-1x"></i> Geri Dön</button></a></div> 
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="islemler/duzenle.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                <input type="hidden" name="icerik_id" value="<?php echo $icerik_id; ?>">
                <input type="hidden" name="icerik_resimyol" value="<?php echo $icerik_resimyol; ?>">

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Yüklü Resim
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <img style="width:300px; height: 200px;" src="upload/resim/icerik/<?php echo $icerik_resimyol; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç
                  </label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="file" name="icerik_resimyol" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>                

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="icerik_ad" value="<?php echo stripslashes($icerik_ad); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Kategorisi
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">                  
                    <select id="heard" class="form-control" name="icerik_kategori" required="required">
                      <?php 
                      $kategorisor=$db->prepare("SELECT * FROM kategoriler ORDER BY kategori_ad ASC");
                      $kategorisor->execute();                  
                      while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { extract($kategoricek); ?>                      
                      <option <?php echo $icerik_kategori == $kategori_id ? 'selected' : null; ?> value="<?php echo $kategori_id; ?>"><?php echo stripslashes($kategori_ad); ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div> 

               <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik Detay</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea class="ckeditor" id="editor1" required="" name="icerik_detay">
                    <?php echo stripslashes($icerik_detay); ?>
                  </textarea>
                </div>
              </div>

              <div class="form-group">
               <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Keywords
               </label>
               <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" name="icerik_keywords" value="<?php echo stripslashes($icerik_keywords); ?>" required="required" class="form-control col-md-7 col-xs-12" ">
              </div>
            </div>

            <?php 
            error_reporting(0);
            $alansor=$db->prepare("SELECT * FROM ilave_alanlar");
            $alansor->execute();
            $alansay=$alansor->rowCount($alansor);
            if ($alansay > 0) { while ($alancek=$alansor->fetch(PDO::FETCH_ASSOC)) { extract($alancek);
              $degersor=$db->prepare("SELECT * FROM ilave_alan_degerler WHERE deger_icerik_id=:icerik_id && deger_alan_id=:alan_id");
              $degersor->execute(array(
                'icerik_id' => $icerik_id,
                'alan_id' => $alan_id
                ));
              $degersay=$degersor->rowCount();
              $degercek=$degersor->fetch(PDO::FETCH_ASSOC);
              extract($degercek);
              if ($degersay > 0) {
                $value = stripslashes($deger_detay);
              }else {
                $value = "";
              }
              if ($alan_tip == 1) {
                $form = '<input type="text" name="alan_'.$alan_id.'" value="'.$value.'" class="form-control col-md-7 col-xs-12">';
              }elseif ($alan_tip == 2) {
                $form = '<textarea class="form-control col-md-7 col-xs-12" name="alan_'.$alan_id.'"  rows="4">'.$value.'</textarea>';
              }
              
              ?>   
              

              <div class="form-group">
               <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İlave Alan - (<?php echo $alan_ad; ?>)
               </label>
               <div class="col-md-9 col-sm-9 col-xs-12">
                 <?php echo $form; ?>
               </div>
             </div>   
             <?php } } ?>       

             <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Durumu
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <select id="heard" class="form-control" name="icerik_durum" required>
                  <option value="1" <?php echo $icerik_durum == 1 ? 'selected' : null; ?>>AKTİF</option>
                  <option value="0" <?php echo $icerik_durum == 0 ? 'selected' : null; ?>>PASİF</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Anasayfada Görünümü
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <select id="heard" class="form-control" name="icerik_anasayfada_goster" required>
                  <option value="1" <?php echo $icerik_anasayfada_goster == 1 ? 'selected' : null; ?>>GÖSTERİLİYOR</option>
                  <option value="0" <?php echo $icerik_anasayfada_goster == 0 ? 'selected' : null; ?>>GÖSTERİLMİYOR</option>
                </select>
              </div>
            </div>

          <div class="ln_solid"></div>

          <div align="right" class="form-group">
            <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
             <button type="submit" name="icerik-duzenle" style="font-weight:bolder;" class="btn btn-primary">
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