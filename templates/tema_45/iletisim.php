<section id="contact">
    <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
    <div class="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <div class="contact-form">
                        <h3>İletişime Geç</h3>

                        <address>
                          <strong>ÜMİT UZ Limited Şirket</strong><br>
                          <?php echo $ayarcek['ayar_adres']; ?><br>
                          <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?><br>
                          <abbr title="Telefon">Telefon :</abbr> <?php echo $ayarcek['ayar_tel']; ?>
                      </address>

                      <form id="main-contact-form" name="contact-form" method="post" action="#">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Ad-Soyad" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="E-posta" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Konu" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="8" placeholder="Mesaj" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!--/#bottom-->