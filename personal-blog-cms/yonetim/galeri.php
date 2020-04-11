<?php 
include 'header.php';

if (!empty($_FILES)) {
  $uploads='dosyalar/resimler/galeri';
  $tmp_name=$_FILES['file']["tmp_name"];
  $name=$_FILES['file']["name"];
  $benzersizsayi1=rand(10000,90000);
  $benzersizsayi2=rand(20000,50000);
  $benzersizad=$benzersizsayi1.$benzersizsayi2;
  $resim_yolu=$benzersizad.$name;
  move_uploaded_file($tmp_name, "$uploads/$benzersizad$name");

  $ekle=$db->prepare("INSERT INTO galeri SET 
    galeri_resimyol=:resimyol
    ");

  $insert=$ekle->execute(array(
    'resimyol' => $resim_yolu
    ));
}
$sayfada=4;
$sorgu=$db->prepare("SELECT * FROM galeri");
$sorgu->execute();
$toplam_icerik=$sorgu->rowCount();
$toplam_sayfa=ceil($toplam_icerik / $sayfada);
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
if($sayfa<1) $sayfa=1;
if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;
$limit=($sayfa-1)*$sayfada; 
$galerisor=$db->prepare("SELECT * FROM galeri ORDER BY galeri_id DESC LIMIT $limit,$sayfada");
$galerisor->execute();
$say=$sorgu->rowCount();
$say2=$galerisor->rowCount();
?>

<div class="container body">
  <div class="main_container">

   <?php include 'sidebar.php'; include 'navigasyon.php'; ?>

   <!-- page content -->
   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>GALERİ</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <form action="" method="post">
              <div class="input-group">
                <input type="text" name="aranan" class="form-control" placeholder="Bir şey arayın...">
                <span class="input-group-btn">
                  <button style="color:white;" class="btn btn-info" name="arama" type="submit">Araştır!</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Galeri İşlemleri 

                  <?php                  
                  if ($_GET['durum']=="silindi")
                  {
                    echo "<font size='2' color='purple'><b>Başarıyla Silindi</b></font>";
                  } 
                  elseif ($_GET['durum']=="silinemedi")
                  {
                    echo "<font size='2' color='red'><b>Maalesef, Silinirken Bir Hatayla Karşılaşıldı.</b></font>";
                  }
                  ?> 

                </h2>
                <div align="right"><a href="galeri-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle </button></a></div>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">
                <?php if ($say > 0) { ?>
                 <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">iceriklerden</font><code style="font-size: 20px;"><?php echo $say; ?></code> tanesinden <code style="font-size: 20px;"><?php echo $say2; ?></code> tanesi gösteriliyor </p>

                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">                      
                        <th class="column-title">Galeri Fotoğraf  </th>                        
                        <th class="column-title">Eklenme Tarihi  </th>
                        <th width="80" class="column-title"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) { extract($galericek); ?>
                        <tr class="even pointer"> 
                          <td class="">
                            <img style="width:75px; height: 50px;" src="upload/resim/galeri/<?php echo $galeri_resimyol; ?>" alt="">
                          </td>                                               
                          <td style="font-weight: bolder; font-size: 17px;"><?php echo $galeri_zaman; ?></td>

                          <td class=" "><a href="islemler/sil.php?galerisil=silindi&galeri_id=<?php echo $galeri_id; ?>&galeri_resimyol=<?php echo $galeri_resimyol; ?>"><button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button></a></td>                        
                        </tr> 
                        <?php } ?>
                      </tbody>
                    </table>
                    <div align="center">
                      <ul class="pagination">
                        <li><a href="#">&lsaquo; Önceki</a></li>
                        <?php 
                        $s=0;
                        while($s < $toplam_sayfa){ $s++;
                          if ($s==$sayfa) { ?>
                          <li class="active">
                          <a href="galeri?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                          </li>
                          <?php }
                          else
                            { ?> 
                          <li>
                            <a href="galeri?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                          </li>
                          <?php } } 
                          ?> 
                          <li><a href="#">Sonraki &rsaquo;</a></li>
                        </ul>
                      </div> 
                    </div>
                    <?php }else {
                      echo "Galeri Yoktur!";
                    } ?>
                  </div>
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