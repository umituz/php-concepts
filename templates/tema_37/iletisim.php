<?php
include 'header.php';
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
 ?>

    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Adres Bilgilerimiz</h5>
                                    <p><?php echo $ayarcek['ayar_adres']; ?> <br>
                                    <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></p>
                                    <p>Telefon : <?php echo $ayarcek['ayar_tel']; ?> <br>
                                    E-posta : <?php echo $ayarcek['ayar_mail']; ?></p>
                                </address>

                                <address>
                                    <h5>Adres Bilgilerimiz</h5>
                                    <p><?php echo $ayarcek['ayar_adres']; ?> <br>
                                    <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></p>
                                    <p>Telefon : <?php echo $ayarcek['ayar_tel']; ?> <br>
                                    E-posta : <?php echo $ayarcek['ayar_mail']; ?></p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>Adres Bilgilerimiz</h5>
                                    <p><?php echo $ayarcek['ayar_adres']; ?> <br>
                                    <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></p>
                                    <p>Telefon : <?php echo $ayarcek['ayar_tel']; ?> <br>
                                    E-posta : <?php echo $ayarcek['ayar_mail']; ?></p>
                                </address>

                                <address>
                                    <h5>Adres Bilgilerimiz</h5>
                                    <p><?php echo $ayarcek['ayar_adres']; ?> <br>
                                    <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></p>
                                    <p>Telefon : <?php echo $ayarcek['ayar_tel']; ?> <br>
                                    E-posta : <?php echo $ayarcek['ayar_mail']; ?></p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2><?php echo $iletisimcek['iletisim_ad']; ?></h2>
                <p class="lead"><?php echo $iletisimcek['iletisim_detay']; ?></p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Tam adınız *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>E-posta adresiniz *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Telefon numaranız</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Şirket İsmi</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Konu *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mesajınız *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Gönder</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

<?php include 'footer.php'; ?>