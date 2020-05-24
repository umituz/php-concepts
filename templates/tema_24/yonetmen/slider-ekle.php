<?php 
include 'header.php';
$slidersor=$db->prepare("SELECT * FROM slider order by slider_id desc");
$slidersor->execute();
$say=$slidersor->rowCount();
?>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Slider</h3>
			</div>
		</div>

		<div class="clearfix"></div>

		<div style="margin-top: 30px;" class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div align="right" class="x_title">
						<h2>Slider İşlemleri</h2>
						<a href="slider.php"><i title="Ekle" class="fa fa-undo fa-4x"></i></a>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<form action="islemler/ekle.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Resim Seç</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" required="" name="slider_resimyol" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Slider Adı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="slider_ad" placeholder="Slider Adını Giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Slider Linki</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="slider_link" placeholder="Slider Linki Giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Slider Sırası</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="" name="slider_sira" placeholder="Slider Sırasını Giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Slider Durumu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="slider_durum" required="">
                            <option value="1">AKTİF</option>
                            <option value="0">PASİF</option>
                          </select>
                        </div>
                      </div>

                      
                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <input type="submit" name="slider-ekle" value="Ekle" class="btn btn-success">
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
