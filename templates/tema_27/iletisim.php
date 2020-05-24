<?php 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Contact Section -->  
<section class="color-light " id="contact-sec"  >
 <div class="container" >      
  <div class="row text-center" >
    <div class="col-md-8 col-md-offset-2 ">
      <h2><?php echo $iletisimcek['iletisim_ad']; ?></h2>
      <h4>
        <strong>
          <?php echo $iletisimcek['iletisim_detay']; ?>
        </strong>
      </h4>
    </div>

  </div>

  <div class="row" >
    <div class="col-md-5 contact-cls" >
      <h3>Adres Bilgilerimiz</h3>
      <div >
        <span><i class="fa fa-home"> </i> Adres: <?php echo $ayarcek['ayar_adres']; ?> </span>
        <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?> 
        <br />

        <span><i class="fa fa-phone"> </i> Telefon: <?php echo $ayarcek['ayar_tel']; ?></span>


      </div>


    </div>
    <div class="col-md-7">

      <form>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input type="text" class="form-control" required="required" placeholder="Adınız">
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input type="text" class="form-control" required="required" placeholder="E-posta adresiniz">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <textarea name="message" id="message" required="required" class="form-control" rows="3"  placeholder="İletmek istediğiniz mesajınız..."></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default">Gönder</button>
            </div>
          </div>
        </div>
      </form>
      <br />
      <div id="social-icon">
        <a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook fa-2x"></i></a>
        <a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter fa-2x"></i></a>
        <a href="<?php echo $ayarcek['ayar_linkedin']; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
        <a href="<?php echo $ayarcek['ayar_google']; ?>"><i class="fa fa-google-plus fa-2x"></i></a>
        <a href="<?php echo $ayarcek['ayar_pinterest']; ?>"><i class="fa fa-pinterest fa-2x"></i></a>					
      </div>
    </div>

  </div>
</div>
</section>
<!--End Contact Section -->