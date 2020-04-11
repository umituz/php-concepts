<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $yorumsor=$db->prepare("SELECT * FROM yorum WHERE yorum_ad LIKE '%$aranan%' ORDER BY yorum_durum DESC");
  $yorumsor->execute();
  $say=$yorumsor->rowCount();
}
else
{
  $yorumsor=$db->prepare("SELECT * FROM yorum INNER JOIN icerik ON icerik_id = yorum_icerik_id ORDER BY yorum_id DESC");
  $yorumsor->execute();
  $say=$yorumsor->rowCount();
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
          <h3>YORUMLAR</h3>
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
                <h2>Yorum İşlemleri 

                  <?php
                  if ($_GET['durum']=="eklendi")
                  {
                    echo "<font color='green'><b>Başarıyla Eklendi</b></font>";
                  } 
                  elseif ($_GET['durum']=="eklenemedi")
                  {
                    echo "<font color='red'><b>Maalesef, Eklenirken Bir Hatayla Karşılaşıldı.</b></font>";
                  }
                  if ($_GET['durum']=="silindi")
                  {
                    echo "<font color='purple'><b>Başarıyla Silindi</b></font>";
                  } 
                  elseif ($_GET['durum']=="silinemedi")
                  {
                    echo "<font color='red'><b>Maalesef, Silinirken Bir Hatayla Karşılaşıldı.</b></font>";
                  }
                  ?> 

                </h2>
                            
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">yorum</font> sayısı <code style="font-size: 20px;"> <?php echo $say; ?> </code> tanedir </p>

                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th class="column-title">Yorum Tarihi</th>
                        <th class="column-title">Yorum Yazan</th> 
                        <th class="column-title">Yorum Yapıldığı Yer</th>                        
                        <th class="column-title">Yorum Durumu </th>
                        
                        <th width="80" class="column-title"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) { extract($yorumcek); ?>

                        <tr class="even pointer">                        
                         <td style="font-weight: bolder; font-size: 17px;"><?php echo $yorum_zaman; ?> </td>
                         <td style="font-weight: bolder; font-size: 17px;"><?php echo $yorum_ad; ?></td>
                         <td style="font-weight: bolder; font-size: 17px;"><?php echo $icerik_ad; ?></td>
                         <td style="font-weight: bolder; font-size: 17px;"><?php if ($yorum_durum == 1) { echo "<font color='green'>ONAYLI</font>"; } 
                          elseif ($yorum_durum == 0) { echo "<font color='red'>ONAY BEKLİYOR</font>"; } ?></td>
                          
                          <td class=" "><a onclick="return confirm('Silmek İstediğinize Emin Misiniz?');" href="islemler/sil.php?yorumsil=silindi&yorum_id=<?php echo $yorum_id; ?>"><button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button></a></td>                        
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