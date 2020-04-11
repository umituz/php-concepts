<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $dosyasor=$db->prepare("SELECT * FROM dosya WHERE dosya_ad LIKE '%$aranan%' ORDER BY dosya_id DESC");
  $dosyasor->execute();
  $say=$dosyasor->rowCount();
}
else
{
  $dosyasor=$db->prepare("SELECT * FROM dosya ORDER BY dosya_id DESC");
  $dosyasor->execute();
  $say=$dosyasor->rowCount();
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
          <h3>DOSYALAR</h3>
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
                <h2>Dosya İşlemleri 

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
                <div align="right"><a href="dosya-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <?php 
                if ($say>0) { ?>
                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">dosya</font> sayısı <code style="font-size: 20px;"> <?php echo $say; ?> </code> tanedir </p>
                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                       <th width="250" class="column-title">Eklenme Tarihi </th>                    
                       <th class="column-title">Dosya Ad </th>                                              
                       <th width="80" class="column-title"></th>
                       <th width="80" class="column-title"></th>
                     </tr>
                   </thead> 
                   <tbody>
                   <?php while ($dosyacek=$dosyasor->fetch(PDO::FETCH_ASSOC)) { extract($dosyacek); ?>
                      <tr class="even pointer">   
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $dosya_zaman; ?> </td>                                           
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $dosya_ad; ?></td>
                        <td class="text-center">
                          <a href="dosya-duzenle.php?dosya_id=<?php echo $dosya_id; ?>">
                            <button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle</button>
                          </a>
                        </td>
                        <td class=" ">
                          <a onclick="return confirm('Silmek İstediğinize Emin Misiniz?');" href="islemler/sil.php?dosyasil=silindi&dosya_id=<?php echo $dosya_id; ?>&dosya_konum=<?php echo $dosya_konum ?>">
                            <button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button>
                          </a>
                        </td>                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <?php } else { echo "Henüz dosya yoktur!"; }  ?>
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