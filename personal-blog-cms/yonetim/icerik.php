<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $iceriksor=$db->prepare("SELECT * FROM icerik WHERE icerik_ad LIKE '%$aranan%' ORDER BY icerik_durum DESC, icerik_id DESC");
  $iceriksor->execute();
  $say=$iceriksor->rowCount();
}
else
{
 $sayfada=BLOG_LIMIT;
 $sorgu=$db->prepare("SELECT * FROM icerik");
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
 $iceriksor=$db->prepare("SELECT * FROM icerik INNER JOIN kategoriler ON kategori_id = icerik_kategori ORDER BY icerik_id DESC LIMIT $limit,$sayfada");
 $iceriksor->execute();
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
          <h3>İÇERİK</h3>
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
                <h2>İçerik İşlemleri 

                  <?php
                  if ($_GET['durum']=="eklendi")
                  {
                    echo "<font size='2' color='green'><b>Başarıyla Eklendi</b></font>";
                  } 
                  elseif ($_GET['durum']=="eklenemedi")
                  {
                    echo "<font size='2' color='red'><b>Maalesef, Eklenirken Bir Hatayla Karşılaşıldı.</b></font>";
                  }
                  if ($_GET['durum']=="mevcut")
                  {
                    echo "<font size='2' color='red'><b>Bu İçerik Adı Kullanıyor, Başka Bir Tane Deneyin</b></font>";
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
                <div align="right"><a href="icerik-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">
                <?php if ($say > 0) { ?>

                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">içerik</font> sayısı <code style="font-size: 20px;"> <?php echo $toplam_icerik; ?> </code> tanedir </p>

                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th class="column-title">İçerik Resim </th>
                        <th class="column-title text-center">İçerik Ad </th>
                        <th class="column-title text-center">İçerik Kategorisi </th>
                        <th class="column-title text-center">İçerik Zaman </th>
                        <th class="column-title text-center">İçerik Durum </th>
                        <th width="80" class="column-title"></th>
                        <th width="80" class="column-title"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { extract($icerikcek); ?>

                        <tr class="even pointer">                        
                          <td class=""><img style="width:75px; height: 50px;" src="upload/resim/icerik/<?php echo $icerik_resimyol; ?>" alt=""></td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php echo $icerik_ad; ?></td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php echo $kategori_ad; ?></td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php echo $icerik_zaman; ?> </td>
                          <td style="font-weight: bolder; font-size: 17px;" class="text-center"><?php if ($icerik_durum == 1) { echo "<font color='green'>AKTİF</font>"; } 
                            elseif ($icerik_durum == 0) { echo "<font color='red'>PASİF</font>"; } ?></td>

                            <td class="text-center">
                              <a href="icerik-duzenle.php?icerik_id=<?php echo $icerik_id; ?>">
                                <button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle</button>
                              </a>
                            </td>
                            <td class=" ">
                              <a onclick="return confirm('Silmek İstediğinize Emin Misiniz?');" href="islemler/sil.php?iceriksil=silindi&icerik_id=<?php echo $icerik_id; ?>&icerik_resimyol=<?php echo $icerik_resimyol; ?>">
                                <button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button>
                              </a>
                            </td>                        
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
                      <?php }else { echo "İÇERİK YOKTUR!";} ?>
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