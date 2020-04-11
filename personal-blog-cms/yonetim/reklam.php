<?php 
include 'header.php';

if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $reklamsor=$db->prepare("SELECT * FROM reklam WHERE reklam_ad LIKE '%$aranan%' ORDER BY reklam_id DESC");
  $reklamsor->execute();
  $say=$reklamsor->rowCount();
}
else
{
  $reklamsor=$db->prepare("SELECT * FROM reklam ORDER BY reklam_id DESC");
  $reklamsor->execute();
  $say=$reklamsor->rowCount();
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
          <h3>REKLAMLAR</h3>
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
                <h2>Reklam İşlemleri 

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
                <div align="right"><a href="reklam-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <?php 
                if ($say>0) { ?>
                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">reklam</font> sayısı <code style="font-size: 20px;"> <?php echo $say; ?> </code> tanedir </p>
                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                       <th width="250" class="column-title">Reklam Resim</th>                      
                       <th class="column-title">Reklam Ad </th>  
                       <th width="250" class="column-title">Eklenme Tarihi </th>                     
                       <th class="column-title">Reklam Durum </th>                                              
                       <th width="80" class="column-title"></th>
                       <th width="80" class="column-title"></th>
                     </tr>
                   </thead> 
                   <tbody>
                    <?php while ($reklamcek=$reklamsor->fetch(PDO::FETCH_ASSOC)) { extract($reklamcek); ?>
                      <tr class="even pointer">
                        <td class="">
                          <img style="width:75px; height: 50px;" src="upload/resim/reklam/<?php echo $reklam_resimyol; ?>" alt="">
                        </td>                                                
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $reklam_ad; ?></td>
                        <td style="font-weight: bolder; font-size: 17px;"><?php echo $reklam_zaman; ?> </td>
                        <td style="font-weight: bolder; font-size: 17px;">
                          <?php if ($reklam_durum == 1) {
                            echo ' <font size="4" color="green">AKTİF</font>';
                          }elseif ($reklam_durum == 0) {
                            echo ' <font size="4" color="red">PASİF</font>';
                          } ?>
                        </td>
                        <td class="text-center">
                          <a href="reklam-duzenle.php?reklam_id=<?php echo $reklam_id; ?>">
                            <button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle</button>
                          </a>
                        </td>
                        <td class=" ">
                        <a onclick="return confirm('Silmek İstediğinize Emin Misiniz?');" href="islemler/sil.php?reklamsil=silindi&reklam_id=<?php echo $reklam_id; ?>&reklam_resimyol=<?php echo $reklam_resimyol ?>">
                            <button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil</button>
                          </a>
                        </td>                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <?php } else { echo "Henüz reklam yoktur!"; }  ?>
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