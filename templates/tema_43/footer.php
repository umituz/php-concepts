<?php 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
 ?>
<section id="hire-sec">
    <div class="overlay">
        <div class="container">
            <div class="row text-center pad-top-bottom wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h1><?php echo $iletisimcek['iletisim_ad']; ?></h1>
                    <p><?php echo $iletisimcek['iletisim_detay']; ?></p>
                    <br />
                </div>

            </div>
            <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="col-lg-6  col-md-6  col-sm-6">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Tam adınız" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="E-posta adresiniz." />
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" style="min-height: 100px;" placeholder="Mesajınız"></textarea>
                        </div>
                        <div class="form-group">
                            <a href="#hire-sec" class="btn custom-btn-one ">GÖNDER</a>
                        </div>

                    </form>
                </div>
                <div class="col-lg-4 col-lg-offset-1  col-md-4  col-md-offset-1 col-sm-4 col-sm-offset-1" id="footer-sec">
                    <h3><strong>Adres Bilgileri </strong></h3>
                    <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <p><i>Adres :</i> <?php echo $ayarcek['ayar_adres']; ?> <?php echo $ayarcek['ayar_ilce']; ?> /<?php echo $ayarcek['ayar_il']; ?></p>
                    <p><?php echo $ayarcek['ayar_tel']; ?></p>
                    <p><?php echo $ayarcek['ayar_mail']; ?></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- HIRE SECTION END-->
    <div class="move-me">
        <a href="#home-sec" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- SCROLL TO TOP SECTION END-->
    <!--  JQUERY CORE SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  SCROLL SCRIPTS -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  WOW ANIMATION SCRIPTS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- EASY PIE CHART SCRIPTS -->
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <!-- PRETTY PHOTO SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  STYLE SWITCHER SCRIPTS -->
    <script src="assets/js/styleSwitcher.js"></script>
    <!--  CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>
