<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $yonetmensor=$db->prepare("SELECT * FROM yonetmen WHERE yonetmen_ad LIKE '%$aranan%' ORDER BY  yonetmen_id DESC");
  $yonetmensor->execute();
  $say=$yonetmensor->rowCount();
}
elseif ($yonetmen_yetki==0) {
 $yonetmensor=$db->prepare("SELECT * FROM yonetmen WHERE yonetmen_ad=:yonetmen_ad and yonetmen_durum=:yonetmen_durum and yonetmen_yetki=:yonetmen_yetki");
 $yonetmensor->execute(array('yonetmen_ad' => $yonetmen_ad, 'yonetmen_durum' => 1, 'yonetmen_yetki' => 1));
 $say=$yonetmensor->rowCount();
 if ($say==0) {
  header("Location: yetkisiz.php");
  exit;
}
}
else
{
  $yonetmensor=$db->prepare("SELECT * FROM yonetmen  ORDER BY yonetmen_id DESC");
  $yonetmensor->execute();
  $say=$yonetmensor->rowCount();
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
          <h3>SATIŞ DANIŞMANI</h3>
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
                <h2>Satış Danışmanı İşlemleri 

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
                <div align="right"><a href="danisman-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">danışman</font> sayısı <code style="font-size: 20px;"> <?php echo $say; ?> </code> tanedir </p>

                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">

                        <th class="column-title">Danışman Fotoğraf </th>
                        <th class="column-title text-center">Danışman Ad Soyad </th>
                        <th class="column-title text-center">Danışman Telefon </th>
                        <th class="column-title text-center">Danışman Mail </th>
                        <th class="column-title text-center">Danışman Durum </th>
                        <th width="80" class="column-title"></th>
                        <th width="80" class="column-title"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($yonetmencek=$yonetmensor->fetch(PDO::FETCH_ASSOC)) { extract($yonetmencek); ?>

                        <tr class="even pointer">                        
                          <td class="">
                            <img style="width:150px; height: 75px;" src="dosyalar/resimler/yonetmen/<?php echo $yonetmen_resimyol; ?>" alt="">
                          </td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php echo $yonetmen_ad; ?></td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php echo $yonetmen_tel; ?> </td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php echo $yonetmen_mail; ?> </td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php if ($yonetmen_durum == 1) { echo "<font color='green'>AKTİF</font>"; } 
                            elseif ($yonetmen_durum == 0) { echo "<font color='red'>PASİF</font>"; } ?></td>

                            <td class="text-center"><a href="danisman-duzenle.php?yonetmen_id=<?php echo $yonetmen_id; ?>"><button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle</button></a></td>
                            <td class=" "><a href="islemler/sil.php?danismansil=silindi&yonetmen_id=<?php echo $yonetmen_id; ?>&yonetmen_resimyol=<?php echo $yonetmen_resimyol; ?>"><button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button></a></td>                        
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