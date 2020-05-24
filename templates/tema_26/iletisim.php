<?php
include 'header.php'; 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
?>

    <!-- CONTACT SECTION -->
    <div class="section">
        <div class="container">


            <div class="row main-low-margin">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h1><?php echo $iletisimcek['iletisim_ad'];; ?></h1>
                    <h5><?php echo $iletisimcek['iletisim_detay'];; ?></h5>
                </div>
            </div>


        </div>
    </div>

    <div class="container">
        <div class="row main-low-margin text-center">
            <div class="col-md-5 col-sm-5">
                <div class="circle-body"><i class="fa fa-flask fa-5x  icon-set"></i></div>
                <h3><?php echo $iletisimcek['iletisim_ad'];; ?></h3>
                <p><?php echo $iletisimcek['iletisim_detay']; ?></p>
            </div>

            <div class="col-md-7 col-sm-7">
                <h3>Bir Mesaj Bırakın</h3>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Tam adınız...">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="E-posta adresiniz...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="Textarea1" required="required" class="form-control" rows="7" placeholder="İletmek istediğiniz mesajınız..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Gönder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row main-low-margin ">


            <div class="col-md-7 col-sm-7">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit </h3>
                <hr>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                </p>
            </div>
            <div class="col-md-5 col-sm-5 text-center">
                <div class="circle-body"><i class="fa fa-tint fa-5x  icon-set"></i></div>
                <h3>Adres Bilgilerimiz... </h3>
                <p>
                    <p>
                        <?php echo $ayarcek['ayar_adres']; ?><br>
                        <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il'];; ?><br>
                        Telefon: <?php echo $ayarcek['ayar_tel'];; ?><br>
                        E-posta: <?php echo $ayarcek['ayar_mail'];; ?><br>
                    </p>

                </p>
            </div>
        </div>


    </div>
    <div class="space-bottom"></div>
    <!--END CONTACT SECTION -->

<?php include 'footer.php'; ?>