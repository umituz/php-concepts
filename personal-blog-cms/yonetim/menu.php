<?php 
include 'header.php';
if (isset($_POST['arama']))
{
  $aranan=$_POST['aranan'];
  $menusor=$db->prepare("SELECT * FROM menu WHERE menu_ad LIKE '%$aranan%' ORDER BY menu_durum DESC, menu_sira ASC");
  $menusor->execute();
  $say=$menusor->rowCount();
}
else
{
  $menusor=$db->prepare("SELECT * FROM menu WHERE menu_ust=:menu_ust ORDER BY menu_durum DESC, menu_sira ASC");
  $menusor->execute(array('menu_ust' => 0));
  $say=$menusor->rowCount();
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
          <h3>MENÜ</h3>
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
                <h2>Menü İşlemleri 

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
                <div align="right"><a href="menu-ekle.php"><button style="font-weight:bolder;" class="btn btn-success"><i class="success fa fa-plus-circle fa-1x"></i> Yeni Ekle</button></a></div>              
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <p style="font-weight: bolder; font-size: 15px;">Toplam <font style="text-decoration: underline; font-size: 16px; color:#aaa;">menü</font> sayısı <code style="font-size: 20px;"> <?php echo $say; ?> </code> tanedir </p>

                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">                      
                        <th width="150" class="column-title">Menu Sıra </th>
                        <th class="column-title">Menu Ad</th>
                        <th class="column-title">Menu Hiyerarşi</th>
                        <th class="column-title">Menu Durum </th>
                        <th width="80" class="column-title"></th>
                        <th width="80" class="column-title"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { extract($menucek); $menu_id; ?>

                        <tr class="even pointer">                                                
                          <td style="font-weight: bolder; font-size: 17px;"><?php echo $menu_sira; ?> </td>
                          <td style="font-weight: bolder; font-size: 17px;"><?php echo $menu_ad; ?></td>
                          <td style="font-weight: bolder; font-size: 17px;">
                            <?php if ($menu_ust == 0) { echo "<font color='purple'>ÜST MENÜ</font>"; } 
                            else { echo "<font color='orange'>ALT MENÜ</font>"; } ?>                            
                          </td>
                          <td style="font-weight: bolder; font-size: 17px;">
                            <?php if ($menu_durum == 1) { echo "<font color='green'>AKTİF</font>"; } 
                            elseif ($menu_durum == 0) { echo "<font color='red'>PASİF</font>"; } ?>                            
                          </td>
                          <td class="text-center">
                            <a href="menu-duzenle.php?menu_id=<?php echo $menu_id; ?>">
                              <button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle
                              </button>
                            </a>
                          </td>
                          <td class=" ">
                            <a href="islemler/sil.php?menusil=silindi&menu_id=<?php echo $menu_id; ?>">
                              <button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil
                              </button>
                            </a>
                          </td>                        
                        </tr> 
                        <?php 
                        $menu_id=$menucek['menu_id'];
                        $altmenusor=$db->prepare("SELECT * FROM menu where menu_ust=:menu_id order by menu_sira");
                        $altmenusor->execute(array(
                          'menu_id' => $menu_id
                          ));
                        while($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC))
                        {  
                         ?>
                         <tr class="even pointer">                                                      

                          <td style="font-weight: bolder; font-size: 17px;">
                            <i class="fa fa-long-arrow-right fa-1x"></i><i class="fa fa-long-arrow-right fa-1x"></i>
                          </td>
                          <td style="font-weight: bolder; font-size: 17px;">
                            <b><?php echo $altmenucek['menu_ad']; ?></b>
                          </td>
                          <td style="font-weight: bolder; font-size: 17px;">
                            <?php if ($altmenucek['menu_ust'] == 0) { echo "<font color='purple'>ÜST MENÜ</font>"; } 
                            else { echo "<font color='orange'>ALT MENÜ</font>"; } ?>                            
                          </td>
                          <td style="font-weight: bolder; font-size: 17px;">
                            <?php if ($altmenucek['menu_durum']=='1') { echo "<font color='green'>AKTİF</font>"; } 
                            elseif ($altmenucek['menu_durum']=='0') { echo "<font color='red'>PASİF</font>"; } ?>                        
                          </td>
                          <td class="text-center">
                            <a href="menu-duzenle.php?altmenu_id=<?php echo $altmenucek['menu_id']; ?>">
                              <button style="width: 110px; font-weight: bolder;" class="btn btn-primary"><i class="success fa fa-edit fa-1x"></i> Düzenle
                              </button>
                            </a>
                          </td>
                          <td class=" ">
                            <a href="islemler/sil.php?altmenusil=silindi&altmenu_id=<?php echo $altmenucek['menu_id']; ?>">
                              <button style="width: 90px; font-weight: bolder;" class="btn btn-danger"><i class="success fa fa-trash-o fa-1 x"></i> Sil
                              </button>
                            </a>
                          </td>                          

                        </tr> 

                        <?php } } ?>

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