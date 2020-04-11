<?php 
include 'header.php';
?>
<head>
  <script src="programlar/ckeditor/ckeditor.js" ></script>
  <!-- Select2 -->
  <link href="linkler/select2/dist/css/select2.min.css" rel="stylesheet">
</head>

<div class="container body">
  <div class="main_container">

   <?php include 'sidebar.php'; include 'navigasyon.php'; ?>

   <!-- page content -->
   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>MENÜ</h3>
        </div>
      </div>

      <div class="clearfix"></div>


      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Menü Düzenle
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
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Üst Menü</label>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <select class="select2_single form-control" name="menu_ust" tabindex="-1">
                    <option></option>
                    <option value="0">Üst Menü<option>
                     <?php
                     $query=$db->prepare("SELECT * FROM menu");
                     $query->execute();
                     while ($row=$query->fetch(PDO::FETCH_ASSOC)) { extract($row); ?>
                     <option value="<?php echo $menu_id; ?>"><?php echo $menu_ad; ?><option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <?php 
                $menusor=$db->prepare("SELECT * FROM menu where menu_id=:menu_id");
                $menusor->execute(array(
                  'menu_id' => $_GET['menu_id']
                  ));
                $menucek=$menusor->fetch(PDO::FETCH_ASSOC);
                extract($menucek);
                ?>
                <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>">
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Adı
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="menu_ad" value="<?php echo $menu_ad; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>     

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Link
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="menu_link" value="<?php echo $menu_link ?>" class="form-control col-md-7 col-xs-12" ">
                  </div>
                </div>
<!--
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Menü Detay</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" id="editor1" required="" name="menu_detay">
                      <?php #echo $menu_detay; ?>
                    </textarea>
                  </div>
                </div>
-->
                <div class="form-group">
                 <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Sıra </label>
                 <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="menu_sira" value="<?php echo $menu_sira; ?>" required="required" class="form-control col-md-7 col-xs-12" ">
                </div>
              </div>          

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Durumu
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select id="heard" class="form-control" name="menu_durum" required>
                    <option value="1" <?php echo $menu_durum == 1 ? 'selected' : null; ?>>AKTİF</option>
                    <option value="0" <?php echo $menu_durum == 0 ? 'selected' : null; ?>>PASİF</option>
                  </select>
                </div>
              </div>

              <div class="ln_solid"></div>

              <div align="right" class="form-group">
                <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                  <button type="submit" name="menu-duzenle" style="font-weight:bolder;" class="btn btn-primary">
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
<!-- Select2 -->
<script src="linkler/select2/dist/js/select2.full.min.js"></script>
<!-- Select2 -->
<script>
  $(document).ready(function() {
    $(".select2_single").select2({
      placeholder: "Bir Durum Seç",
      allowClear: true
    });
    $(".select2_group").select2({});
    $(".select2_multiple").select2({
      maximumSelectionLength: 4,
      placeholder: "With Max Selection limit 4",
      allowClear: true
    });
  });
</script>
<!-- /Select2 -->
<?php include 'footer.php'; ?>