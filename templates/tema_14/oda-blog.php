<?php include 'header.php';?>

<div class="container">

  <h2>Blog</h2>


  <!-- form -->

  <div class="row">
    <?php

    $sayfada=10;

    $sorgu=$db->prepare("SELECT * FROM icerik");
    $sorgu->execute();
    $toplam_icerik=$sorgu->rowCount();

    $toplam_sayfa=ceil($toplam_icerik / $sayfada);

    $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

    if($sayfa<1) $sayfa=1;
    if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;

    $limit=($sayfa-1)*$sayfada;

    $iceriksor=$db->prepare("SELECT * FROM icerik order by icerik_id DESC LIMIT $limit,$sayfada");
    $iceriksor->execute();

    while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>
    <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img style="width:600px; height:300px" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive"><div class="info"><h3><?php echo $icerikcek['icerik_ad']; ?></h3>
      <p><?php echo $icerikcek['icerik_ozet']; ?></p><a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>" class="btn btn-default">Detayları Gör</a></div></div>
    </div>
    <?php } ?>

  </div>

  <div class="text-center">
   <ul class="pagination">
     <?php 

     $s=0;
     while($s < $toplam_sayfa)
       { $s++;
        if ($s==$toplam_sayfa) { ?>

        <li class="active">
         <a style="color:white" href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
       </li>

       <?php }
       else
         { ?> 

       <li class="active">
         <a style="color:white" href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
       </li>

       <?php } } ?>  
     </ul>
   </ul>
 </div>


</div>
<?php include 'footer.php';?>