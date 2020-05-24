<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $iceriksor=$db->prepare("SELECT * FROM icerik where icerik_ad LIKE '%$aranan%' order by  icerik_id DESC");
  $iceriksor->execute();
  $say=$iceriksor->rowCount();
}
else
{
  $iceriksor=$db->prepare("SELECT * FROM icerik order by icerik_id desc");
  $iceriksor->execute();
  $say=$iceriksor->rowCount();
}

//$iceriksor=$db->prepare("SELECT * FROM icerik INNER JOIN kategoriler ON kategori_id=icerik_kategori_id order by icerik_zaman DESC");
//$iceriksor->execute();
//$say=$iceriksor->rowCount();

 ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Haberler</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                <form action="" method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelimeniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama">Ara</button>
                    </span>
                  </div>
                </form>

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div align="right" class="x_title">
                    <h2>Haber İşlemleri <small>
                       <?php
                        if ($_GET['durum']=="eklendi")
                        {
                          echo "<font color='green'><b>Başarıyla Eklendi</b></font>";
                        } 
                        elseif ($_GET['durum']=="eklenemedi")
                        {
                          echo "<font color='red'><b>Maalesef, Eklenirken Bir Hatayla Karşılaşıldı.</b></font>";
                        }

                       ?>                  
                    </small></h2>
                    <a href="blog-ekle.php"><i title="Ekle" class="fa fa-plus-circle fa-4x"></i></a> 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                   <p style="font-size:15px; font-weight: bold">Toplam içerik sayısı <code><?php echo $say; ?></code> tanedir.</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th width="200" class="column-title">Eklenme Tarihi </th>
                            <th width="200" class="column-title">Haber Adı </th>
                            <th width="300" class="column-title">Haber Özeti </th>                           
                            <th width="10" class="column-title">Düzenle </th>
                            <th width="10" class="column-title">Sil </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)){?>
                          <tr class="even pointer">
                            <td><?php echo $icerikcek['icerik_zaman']; ?></td>
                            <td class=""><span style="font-size:17px; font-weight: bold;"><?php echo $icerikcek['icerik_ad']; ?></span></td>
                            <td align="justify" class=""><span style="font-size:14px; font-weight: bold;"><?php echo $icerikcek['icerik_ozet']; ?></span></td>
                            <td class=""><a href="blog-duzenle.php?icerik_id=<?php echo $icerikcek['icerik_id']; ?>"><i class="fa fa-edit fa-3x"></i></a></td>
                            <td class=""><a href="islemler/sil.php?icerik_id=<?php echo $icerikcek['icerik_id']; ?>&iceriksil=silindi&icerik_resimyol=<?php echo $icerikcek['icerik_resimyol']; ?>"><i class="fa fa-trash-o fa-3x"></i></a></td>
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
        </div>
        <!-- /page content -->

<?php include 'footer.php'; ?>
       