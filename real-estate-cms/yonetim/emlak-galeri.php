<?php 
include 'header.php';

$emlaksor=$db->prepare("SELECT * FROM emlak WHERE emlak_id=:emlak_id");
$emlaksor->execute(array('emlak_id' => $_GET["emlak_id"]));
$emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC);
$emlakid=$emlakcek["emlak_id"];

$galerisor=$db->prepare("SELECT * FROM galeri WHERE galeri_emlak_id=:galeri_emlak_id");
$galerisor->execute(array('galeri_emlak_id' => $_GET['emlak_id']));
$say=$galerisor->rowCount();


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
                <div align="right"><a href="galeri-ekle.php?galeri_emlak_id=<?php echo $emlakid; ?>"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle </button></a></div>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">galeri</font> sayısı <code style="font-size: 20px;"> <?php echo $say; ?> </code> tanedir </p>

                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">                      
                        <th class="column-title">Emlak Fotoğraf  </th>                        
                        <th class="column-title">Eklenme Tarihi  </th>
                        <th width="80" class="column-title"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) { extract($galericek); ?>                       

                        <tr class="even pointer"> 
                          <td class="">
                            <img style="width:150px; height: 75px;" src="../dosyalar/resimler/emlak/<?php echo $emlak_resimyol; ?>" alt="">
                          </td>                                               
                          <td style="font-weight: bolder; font-size: 17px;"><?php echo $emlak_id; ?>----<?php echo $emlak_zaman; ?>  </td>

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