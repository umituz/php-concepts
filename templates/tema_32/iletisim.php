<?php 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
 ?>
<!--CONTACT SECTION-->
<section class="for-full-back color-bg-one" id="contact-sec">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2 ">
                <h1><i class="fa fa-globe faa-pulse animated  "></i> <?php echo $iletisimcek['iletisim_ad']; ?></h1>
            </div>
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h4>
                        <strong><?php echo $iletisimcek['iletisim_detay']; ?></strong>
                   </h4>
               </div>
           </div>
       </div>
   </div>
</section>
<section class="for-full-back color-white " id="contact-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-5 contact-cls">
                <h2>İletişim </h2>
                <div>
                    <span><i class="fa fa-home"></i>Adres: <?php echo $ayarcek['ayar_adres']; ?> <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></span>
                    <br />
                    <span><i class="fa fa-phone"></i>Telefon: <?php echo $ayarcek['ayar_tel']; ?></span>
                    <br />
                    <span><i class="fa fa-envelope-o"></i><?php echo $ayarcek['ayar_mail']; ?></span>
                    <br />
                    <span><i class="fa fa-globe"></i><?php echo $ayarcek['ayar_siteurl']; ?></span>
                    <br />
                </div>
            </div>
            <div class="col-md-7">
                <h2><?php echo $iletisimcek['iletisim_ad']; ?></h2>
                <p><?php echo $iletisimcek['iletisim_detay']; ?></p>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Adınız...">
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
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="İletmek istediğiniz mesajınız..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Gönder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--END CONTACT SECTION-->