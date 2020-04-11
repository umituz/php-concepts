<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $kategorisor=$db->prepare("SELECT * FROM kategoriler WHERE kategori_ad LIKE '%$aranan%' ORDER BY kategori_id DESC");
  $kategorisor->execute();
  $say=$kategorisor->rowCount();
}
else
{
  $kategorisor=$db->prepare("SELECT * FROM kategoriler ORDER BY kategori_id DESC");
  $kategorisor->execute();
  $say=$kategorisor->rowCount();
}

?>

<div class="container body">
  <div class="main_container">

   <?php include 'sidebar.php'; include 'navigasyon.php'; ?>

   <!-- page content -->
   <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>KATEGORİLER</h3>
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
                <h2>Kategori İşlemleri 

                  <?php
                  if ($_GET['durum']=="eklendi")
                  {
                    echo "<font size='2' color='green'><b>Başarıyla Eklendi</b></font>";
                  } 
                  elseif ($_GET['durum']=="eklenemedi")
                  {
                    echo "<font size='2' color='red'><b>Maalesef, Eklenirken Bir Hatayla Karşılaşıldı.</b></font>";
                  }
                  if ($_GET['durum']=="silindi")
                  {
                    echo "<font size='2' color='green'><b>Başarıyla Silindi</b></font>";
                  } 
                  elseif ($_GET['durum']=="silinemedi")
                  {
                    echo "<font size='2' color='red'><b>Maalesef, Silinirken Bir Hatayla Karşılaşıldı.</b></font>";
                  }
                  if ($_GET['durum']=="mevcut")
                  {
                    echo "<font size='2' color='red'><b>Maalesef, Belirlediğiniz Kategori Adı Mevcut. Başka Bir Tane Deneyin</b></font>";
                  } 
                  ?> 

                </h2>
                <div align="right"><a href="kategori-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <?php 
                if ($say>0) { ?>
                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">kategori</font> sayısı <code style="font-size: 20px;"> <?php echo $say; ?> </code> tanedir </p>
                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                       <th width="250" class="column-title">Eklenme Tarihi </th>
                       <th class="column-title">Kategori Ad </th>                       
                       <th class="column-title">Kategori Link </th>                       
                       <th class="column-title">Kategori Keywords </th>
                       <th width="80" class="column-title"></th>
                       <th width="80" class="column-title"></th>
                     </tr>
                   </thead>
                   <tbody>
                    <?php while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { extract($kategoricek);
                      $zaman = explode(" ",$kategori_zaman);
                      $tarih = $zaman[0];
                      $saat = $zaman[1];
                      $tarih2 =explode("-", $tarih);
                      $ay = $tarih2[1];
                      ?>
                      <tr class="even pointer">                        
                        <td style="font-weight: bolder; font-size: 17px;">
                        <?php 
                          echo $tarih2[2]." ";
                          if ($ay == 1) {
                            echo "Ocak";
                          }elseif ($ay == 2) {
                            echo "Şubat";
                          }elseif ($ay == 3) {
                            echo "Mart";
                          }elseif ($ay == 4) {
                            echo "Nisan";
                          }elseif ($ay == 5) {
                            echo "Mayıs";
                          }elseif ($ay == 6) {
                            echo "Haziran";
                          }elseif ($ay == 7) {
                            echo "Temmuz";
                          }elseif ($ay == 8) {
                            echo "Ağustos";
                          }elseif ($ay == 9) {
                            echo "Eylül";
                          }elseif ($ay == 10) {
                            echo "Ekim";
                          }elseif ($ay == 11) {
                            echo "Kasım";
                          }elseif ($ay == 12) {
                            echo "Aralık";
                          }
                          echo " ".$tarih2[0]." ".$saat;
                          ?>
                        </td>
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $kategori_ad; ?></td>
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $kategori_link; ?></td>
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $kategori_keywords; ?></td>

                        <td class="text-center">
                          <a href="kategori-duzenle.php?kategori_id=<?php echo $kategori_id; ?>">
                            <button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle</button>
                          </a>
                        </td>
                        <td class=" ">
                          <a onclick="return confirm('Silmek İstediğinize Emin Misiniz?');" href="islemler/sil.php?kategorisil=silindi&kategori_id=<?php echo $kategori_id; ?>">
                            <button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button>
                          </a>
                        </td>                        
                      </tr>

                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <?php } else { echo "Henüz kategori yoktur!"; }  ?>
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