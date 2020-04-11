<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $derssor=$db->prepare("SELECT * FROM ders WHERE ders_ad LIKE '%$aranan%' ORDER BY ders_id DESC");
  $derssor->execute();
  $say=$derssor->rowCount();
}
else
{
  $derssor=$db->prepare("SELECT * FROM ders INNER JOIN ders_kategori ON derskategori_id = ders_kategori ORDER BY ders_id DESC");
  $derssor->execute();
  $say=$derssor->rowCount();
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
          <h3>DERSLER</h3>
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
                <h2>Ders İşlemleri 

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
                <div align="right"><a href="ders-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <?php 
                if ($say>0) { ?>
                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">ders</font> sayısı <code style="font-size: 20px;"> <?php echo $say; ?> </code> tanedir </p>
                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                       <th width="250" class="column-title">Eklenme Tarihi </th>                    
                       <th class="column-title">Ders Adı </th>                                              
                       <th class="column-title">Ders Linki </th>
                        <th class="column-title">Ders Kategorisi </th>    
                       <th class="column-title">Ders Hit </th>                                                                
                       <th width="80" class="column-title"></th>
                       <th width="80" class="column-title"></th>
                     </tr>
                   </thead> 
                   <tbody>
                     <?php while ($derscek=$derssor->fetch(PDO::FETCH_ASSOC)) { extract($derscek); ?>
                      <tr class="even pointer">   
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $ders_zaman; ?> </td>                                           
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $ders_ad; ?></td>
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $ders_link; ?></td>                        
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $derskategori_ad; ?></td>
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $ders_hit; ?></td>
                        <td class="text-center">
                          <a href="ders-duzenle.php?ders_id=<?php echo $ders_id; ?>">
                            <button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle</button>
                          </a>
                        </td>
                        <td class=" ">
                          <a onclick="return confirm('Silmek İstediğinize Emin Misiniz?');" href="islemler/sil.php?derssil=silindi&ders_id=<?php echo $ders_id; ?>&ders_video=<?php echo $ders_video; ?>">
                            <button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button>
                          </a>
                        </td>                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <?php } else { echo "Henüz ders yoktur!"; }  ?>
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