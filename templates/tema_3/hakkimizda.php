<?php 
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda");
$hakkimizdasor->execute();
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?> 
<!-- About Us Section -->
<div id="about-us">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title">
                    <h2><?php echo $hakkimizdacek['hakkimizda_ad']; ?></h2>
                    <hr>
                </div>
                <p><?php echo $hakkimizdacek['hakkimizda_ozet']; ?></p>
            </div>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <div class="row">

                    <?php 
                    $calisansor=$db->prepare("SELECT * FROM calisanlar");
                    $calisansor->execute();
                    while($calisancek=$calisansor->fetch(PDO::FETCH_ASSOC)){?>

                    <div class="col-md-4 col-sm-4">
                        <div class="team">
                            <img src="resimler/calisanlar/<?php echo $calisancek['calisan_resimyol']; ?>" class="img-responsive img-circle" alt="...">
                            <br>
                            <h4><?php echo $calisancek['calisan_adsoyad']; ?></h4>
                            <p class="small"><?php echo $calisancek['calisan_makam']; ?></p>
                            <hr>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>

            <div class="col-md-2 col-sm-2">
                <div class="team hire">
                    <h4>Sende Aramıza Katıl!</h4>
                    <hr>
                    <div class="space"></div>
                    <a href="#">
                        <span class="fa fa-paper-plane-o fa-2x"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="#contact" class="page-scroll down-btn">
                <span class="fa fa-angle-down"></span>
            </a>
        </div>

    </div>
</div>