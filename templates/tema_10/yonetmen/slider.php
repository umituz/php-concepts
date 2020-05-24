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
        <h3>Anasayfa</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div style="margin-top: 30px;" class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div align="right" class="x_title">
            <h2>Başlık Buraya Gelecek</h2>
            <a href="slider-ekle.php"><i title="Ekle" class="fa fa-plus-circle fa-4x"></i></a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p><code><?php echo $say." <b>kayıt listelendi.</b>" ?></code> </p>
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr class="headings">                            
                  <th class="column-title">Slider Resim </th>
                  <th class="column-title">Slider Ad</th>
                  <th class="column-title">Slider Sıra </th>
                  <th class="column-title">Slider Durum </th>
                  <th width="75" class="column-title">Düzenle</th>
                  <th width="75" class="column-title">Sil</th>
                </th>                          
              </tr>
            </thead>

            <tbody>

              <?php while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)){?>

                <tr class="even pointer">                         
                  <td class=" "><img width="250" height="150" src="../resimler/slider/<?php echo $slidercek['slider_resimyol']; ?>"></td>
                  <td class=" "><?php echo $slidercek['slider_ad']; ?></td>
                  <td class=" "><?php echo $slidercek['slider_sira']; ?></i></td>
                  <td class=" ">
                    <?php 

                    if ($slidercek['slider_durum']=="1")
                    {
                     echo "AKTİF";
                   }
                   else
                   {
                    echo "PASİF";
                  }

                  ?>
                </td>
                <td class=" "><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>"><i title="Düzenle" class="fa fa-edit fa-3x"> </i></a></td>
                <td class=""><a href="islemler/sil.php?slidersil=silindi&slider_resimyol=<?php echo $slidercek['slider_resimyol']; ?>&slider_id=<?php echo $slidercek['slider_id']; ?>"><i title="Sil" class="fa fa-trash-o fa-3x"> </i></a></td>
              </td>
            </tr>

            <?php } ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
