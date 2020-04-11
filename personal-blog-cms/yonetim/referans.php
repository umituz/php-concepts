<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $referanssor=$db->prepare("SELECT * FROM referans WHERE referans_ad LIKE '%$aranan%' ORDER BY referans_id DESC");
  $referanssor->execute();
  $say=$referanssor->rowCount();
}
else
{
  $sayfada=REFERANS_LIMIT;
  $sorgu=$db->prepare("SELECT * FROM referans");
  $sorgu->execute();
  $toplam_icerik=$sorgu->rowCount();
  $toplam_sayfa=ceil($toplam_icerik / $sayfada);
  $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
  if($sayfa<1) $sayfa=1;
  if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;
  $limit=($sayfa-1)*$sayfada; 
  $oncekiSayfa = $sayfa > 1 ? $sayfa - 1 : 1;      
  $oncekiLink = $_SERVER['PHP_SELF']."?sayfa=".$oncekiSayfa;
  $sonrakiSayfa = $sayfa < $toplam_sayfa ? $sayfa + 1 : $toplam_sayfa;      
  $sonrakiLink = $_SERVER['PHP_SELF']."?sayfa=".$sonrakiSayfa;
  $referanssor=$db->prepare("SELECT * FROM referans ORDER BY referans_id DESC LIMIT $limit,$sayfada");
  $referanssor->execute();
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
          <h3>REFERANSLAR</h3>
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
                <h2>Referans İşlemleri 

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
                <div align="right"><a href="referans-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">referans</font> sayısı <code style="font-size: 20px;"> <?php echo $toplam_icerik; ?> </code> tanedir </p>

                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">

                        <th class="column-title">Referans Resim </th>
                        <th class="column-title text-center">Referans Ad </th>
                        <th class="column-title text-center">Referans Zaman </th>
                        <th class="column-title text-center">Referans Durum </th>
                        <th width="80" class="column-title"></th>
                        <th width="80" class="column-title"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($referanscek=$referanssor->fetch(PDO::FETCH_ASSOC)) { extract($referanscek); ?>

                        <tr class="even pointer">                        
                          <td class=""><img style="width:75px; height: 50px;" src="upload/resim/referans/<?php echo $referans_resimyol; ?>" alt=""></td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php echo $referans_ad; ?></td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php echo $referans_zaman; ?> </td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php if ($referans_durum == 1) { echo "<font color='green'>AKTİF</font>"; } 
                            elseif ($referans_durum == 0) { echo "<font color='red'>PASİF</font>"; } ?></td>

                            <td><a href="referans-duzenle.php?referans_id=<?php echo $referans_id; ?>"><button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle</button></a></td>
                            <td><a onclick="return confirm('Silmek İstediğinize Emin Misiniz?');" href="islemler/sil.php?referanssil=silindi&referans_id=<?php echo $referans_id; ?>&referans_resimyol=<?php echo $referans_resimyol; ?>"><button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button></a></td>                        
                          </tr>

                          <?php } ?>
                        </tbody>
                      </table>
                      <div class="col-lg-12" align="center">
                        <ul class="pagination">    
                          <li><a href="<?php echo $oncekiLink; ?>">&lsaquo; Önceki</a></li> 
                          <?php 
                          $s=0;     
                          while($s < $toplam_sayfa){ $s++;
                            if ($s==$sayfa) { ?>
                            <li class="active">
                              <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                            </li>
                            <?php } else { ?> 
                            <li>
                              <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                            </li>
                            <?php } } ?>                            
                            <li><a href="<?php echo $sonrakiLink; ?>">Sonraki &rsaquo;</a></li>
                          </ul>
                        </div>
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