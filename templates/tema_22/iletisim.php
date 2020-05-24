<?php 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
?>
 <!-- [CONTACT]
 ============================================================================================================================-->
 <section class="contact-remsh white-background black" id="contact">
   <div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="sectionTitle text-center">
                <h2><?php echo $iletisimcek['iletisim_ad']; ?></strong></h2>
                <br>
                <p><?php echo $iletisimcek['iletisim_detay']; ?></p>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>

            </div>

            <form id="contact-form" method="POST" action="php/sendmail.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-posta adresiniz</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-posta adresinizi giriniz...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konu</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Konu nedir?">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mesajınız</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary black-background" id="contactbtn">Gönder</button>
            </form>

        </div>
    </div>

</div>
</section>

 <!-- [/CONTACT]
 ============================================================================================================================-->