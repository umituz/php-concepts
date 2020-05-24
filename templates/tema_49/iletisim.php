<?php 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
?>
<section id="contact">
  <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
  <div id="contact-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2><?php echo $iletisimcek['iletisim_ad']; ?></h2>
          <p><?php echo $iletisimcek['iletisim_detay']; ?></p>
        </div>
      </div>
      <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
          <div class="col-sm-6">
            <form id="main-contact-form" name="contact-form" method="post" action="#">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Ad-Soyad" required="required">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="E-posta" required="required">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Konu" required="required">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mesaj" required="required"></textarea>
              </div>                        
              <div class="form-group">
                <button type="submit" class="btn-submit">Gönder</button>
              </div>
            </form>   
          </div>
          <div class="col-sm-6">
            <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p><?php echo $iletisimcek['iletisim_detay']; ?></p>
              <ul class="address">
                <li><i class="fa fa-map-marker"></i> <span> Adres :</span> <?php echo $ayarcek['ayar_adres']; ?></li>
                <li><i class="fa fa-phone"></i> <span> Telefon:</span> <?php echo $ayarcek['ayar_tel']; ?>  </li>
                <li><i class="fa fa-envelope"></i> <span> E-posta:</span><a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"> <?php echo $ayarcek['ayar_mail']; ?></a></li>
                <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#"><?php echo $ayarcek['ayar_siteurl']; ?></a></li>
              </ul>
            </div>                            
          </div>
        </div>
      </div>
    </div>
  </div>        
</section><!--/#contact-->