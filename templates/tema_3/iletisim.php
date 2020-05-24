    <!-- Contact Section -->
    <div id="contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Bize Ulaşın</h2>
                <hr>
            </div>
            <div class="space"></div>

            <div class="row">
                <div class="col-md-3">
                    <address>
                        <strong>Adres Bilgileri</strong><br>
                        <br>
                        <?php echo $ayarcek['ayar_adres']; ?><br>
                        <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?><br>
                        <?php echo $ayarcek['ayar_mail']; ?><br>
                        Telefon: <?php echo $ayarcek['ayar_tel']; ?>
                        <ul class="social">
                            <li><a href="<?php echo $ayarcek['ayar_facebook']; ?>"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="<?php echo $ayarcek['ayar_google']; ?>"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="<?php echo $ayarcek['ayar_twitter']; ?>"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="<?php echo $ayarcek['ayar_youtube']; ?>"><span class="fa fa-youtube"></span></a></li>
                          </ul>
                    </address>
                </div>

                <div class="col-md-9">
                    <form autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Adınız">
                                <input type="text" class="form-control" placeholder="Telefon Numaranız">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Email">
                                <input type="text" class="form-control" placeholder="Konu">
                            </div>
                        </div>
                        <textarea class="form-control" rows="4" placeholder="Mesajınız"></textarea>
                        <div class="text-right">
                            <a href="#" class="btn send-btn">Gönder</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>