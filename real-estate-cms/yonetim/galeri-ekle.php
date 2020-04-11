<?php 
include 'header.php'; 
$emlak_id=$_GET["galeri_emlak_id"];
?>

<div class="container body">
  <div class="main_container">

   <?php include 'sidebar.php'; include 'navigasyon.php'; ?>

   <!-- page content -->
   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>GALERİ </h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
            <h2>Galeri Ekle</h2>              
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <p>Çoklu resim seçerek dosyalarınızı tek seferde yükleyebilirsiniz...</p>
              <form action="islemler/ekle.php" class="dropzone">
                <input type="hidden" name="galeri_emlak_id" value="<?php echo $emlak_id; ?>">
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