    <!-- Team Section
    ================================================== -->
    <div id="tf-team">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>kİMLER VAR BU ŞİRKETTE <span class="highlight"><strong>BAK DA GÖR</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>

            <div id="team" class="owl-carousel owl-theme text-center"> <!-- team carousel wrapper -->

                <?php 
                $calisansor=$db->prepare("SELECT * FROM calisanlar");
                $calisansor->execute();
                while ($calisancek=$calisansor->fetch(PDO::FETCH_ASSOC)) {?>

                <div class="item"><!-- Team #1 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>Aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Quis placerat dui. Duis lacinia nisi sit ansequat lorem nunc, nec bibendum erat volutpat ultricies.</p>
                        </div><!-- End Hover Description -->
                        <img src="resimler/<?php echo $calisancek['calisan_resimyol'] ?>" alt="..." class="img-responsive"> <!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3><?php echo $calisancek['calisan_adsoyad']; ?></h3>
                            <p class="text-uppercase"><?php echo $calisancek['calisan_makam']; ?></p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div><!-- End Team Wrapper -->
                </div><!-- End Team #1 -->

                <?php } ?>

            </div> <!-- end team carousel wrapper -->

        </div> <!-- container -->
    </div>