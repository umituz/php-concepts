<?php 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
 ?>
    <div id="tf-contact">
        <div class="container">
            <div class="section-title">
              <h3><?php echo $iletisimcek['iletisim_ad']; ?></h3>
                <p><?php echo $iletisimcek['iletisim_detay']; ?></p>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Adınız-Soyadınız">
                      </div>
                      <div class="form-group">
                        <input type="mail" class="form-control" id="exampleInputPassword1" placeholder="E-posta Adresiniz">
                      </div>
                      <div class="form-group">
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Telefon Numaranız">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="İletmek istediğiniz mesaj..."></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary my-btn dark">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>