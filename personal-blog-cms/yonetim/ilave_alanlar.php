<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $uyesor=$db->prepare("SELECT * FROM uyeler WHERE uye_ad LIKE '%$aranan%' ORDER BY uye_id DESC");
  $uyesor->execute();
  $say=$uyesor->rowCount();
}
else
{
  $sayfada=5;
  $sorgu=$db->prepare("SELECT * FROM ilave_alanlar");
  $sorgu->execute();
  $toplam_icerik=$sorgu->rowCount();
  $toplam_sayfa=ceil($toplam_icerik / $sayfada);
  $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
  if($sayfa<1) $sayfa=1;
  if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;
  $limit=($sayfa-1)*$sayfada; 
  $alansor=$db->prepare("SELECT * FROM ilave_alanlar ORDER BY alan_id DESC LIMIT $limit,$sayfada");
  $alansor->execute();
  $say=$sorgu->rowCount();
  $say2=$alansor->rowCount();
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
          <h3>İLAVE ALANLAR</h3>
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
                <h2>İlave Alan İşlemleri 

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
                    echo "<font size='2' color='red'><b>Maalesef, Belirlediğiniz Alan Adı Mevcut. Başka Bir Tane Deneyin</b></font>";
                  } 
                  ?> 

                </h2>
                <div align="right"><a href="ilave_alan_ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">
                <?php 
                if ($say>0) { ?>
                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">ilave alanların</font><code style="font-size: 20px;"><?php echo $say; ?></code> tanesinden <code style="font-size: 20px;"><?php echo $say2; ?></code> tanesi gösteriliyor </p>
                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                       <th class="column-title">Eklenme Tarihi </th>
                       <th class="column-title">Alan Ad </th>                       
                       <th class="column-title">Alan Tip </th>
                       <th width="80" class="column-title"></th>
                       <th width="80" class="column-title"></th>
                     </tr>
                   </thead>
                   <tbody>
                    <?php while ($alancek=$alansor->fetch(PDO::FETCH_ASSOC)) { extract($alancek); ?>
                      <tr class="even pointer">                        
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $alan_zaman; ?> </td>
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $alan_ad; ?></td>
                        <td style="font-weight: bolder; font-size: 17px;"><?php if ($alan_tip == 1) { echo "<font color='purple'>INPUT</font>"; } 
                          elseif ($alan_tip == 2) { echo "<font color='purple'>TEXTAREA</font>"; } ?></td>

                          <td class="text-center">
                            <a href="ilave_alan_duzenle.php?alan_id=<?php echo $alan_id; ?>">
                              <button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle</button>
                            </a>
                          </td>
                          <td class=" ">
                            <a onclick="return confirm('Silmek İstediğinize Emin Misiniz?');" href="islemler/sil.php?alansil=silindi&alan_id=<?php echo $alan_id; ?>">
                              <button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button>
                            </a>
                          </td>                        
                        </tr>

                        <?php } ?>
                      </tbody>
                    </table>     
                    <div align="center">
                      <ul class="pagination">
                        <li><a href="#">&lsaquo; Önceki</a></li>
                        <?php 
                        $s=0;
                        if ($toplam_icerik > $limit) {
                          while($s < $toplam_sayfa){ $s++;
                            if ($s==$sayfa) { ?>
                            <li class="active">
                              <a href="uyeler?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                            </li>
                            <?php }
                            else
                              { ?> 
                            <li>
                              <a href="uyeler?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                            </li>
                            <?php } } 
                            ?> 
                            <li><a href="#">Sonraki &rsaquo;</a></li>
                          </ul>
                        </div>               
                      </div>
                      <?php } } else { echo "İLAVE ALAN YOKTUR!"; }  ?>
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