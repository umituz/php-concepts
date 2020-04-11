<?php 
include 'header.php';
if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $emlaksor=$db->prepare("SELECT * FROM emlak WHERE emlak_ad LIKE '%$aranan%' ORDER BY emlak_zaman DESC");
  $emlaksor->execute();
  $say=$emlaksor->rowCount();
}
else
{
  $emlaksor=$db->prepare("SELECT * FROM emlak ORDER BY emlak_zaman DESC");
  $emlaksor->execute();
  $say=$emlaksor->rowCount();
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
          <h3>EMLAK</h3>
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
                <h2>Emlak İşlemleri 

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
                    echo "<font size='2' color='purple'><b>Başarıyla Silindi</b></font>";
                  } 
                  elseif ($_GET['durum']=="silinemedi")
                  {
                    echo "<font size='2' color='red'><b>Maalesef, Silinirken Bir Hatayla Karşılaşıldı.</b></font>";
                  }
                  ?> 

                </h2>
                <div align="right"><a href="emlak-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">emlak</font> sayısı <code style="font-size: 20px;"> <?php echo $say; ?> </code> tanedir </p>

                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">                      
                        <th width="250" class="column-title">Emlak Fotoğraf </th>                        
                        <th class="column-title">Emlak Başlık</th>
                        <th class="column-title">Emlak Fiyatı</th>
                        <th class="column-title">Emlak Durum </th>
                        <th width="250" class="column-title">Eklenme Tarihi </th>
                        <th width="80" class="column-title"></th>
                        <th width="80" class="column-title"></th>
                        <th width="80" class="column-title"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC)) { extract($emlakcek); $emlak_id; ?>

                        <tr class="even pointer"> 
                          <td class="">
                            <img style="width:150px; height: 75px;" src="../dosyalar/resimler/emlak/<?php echo $emlak_resimyol; ?>" alt="">
                          </td>                                               
                          
                          <td style="font-weight: bolder; font-size: 17px;"><?php echo $emlak_ad; ?></td>
                          <td style="font-weight: bolder; font-size: 17px;"><?php echo $emlak_fiyat; ?> ₺</td>
                          <td style="font-weight: bolder; font-size: 17px;"><?php if ($emlak_durum == "SATILIK") { echo "<font color='green'>SATILIK</font>"; } 
                            elseif ($emlak_durum == "KİRALIK") { echo "<font color='red'>KİRALIK</font>"; } ?></td>
                            <td style="font-weight: bolder; font-size: 17px;"><?php echo $emlak_zaman; ?> </td>
                            <td class="text-center"><a href="emlak-galeri.php?emlak_id=<?php echo $emlak_id; ?>"><button style="width: 110px; font-weight: bolder;" class="btn btn-default"><i class="success fa fa-plus-circle fa-1x"></i> Galeri Ekle</button></a></td>
                            <td class="text-center"><a href="emlak-duzenle.php?emlak_id=<?php echo $emlak_id; ?>"><button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle</button></a></td>
                            <td class=" "><a href="islemler/sil.php?emlaksil=silindi&emlak_id=<?php echo $emlak_id; ?>&emlak_resimyol=<?php echo $emlak_resimyol; ?>"><button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button></a></td>                        
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
      </div>
      <!-- /page content -->
    </div>
  </div>

  <?php include 'footer.php'; ?>