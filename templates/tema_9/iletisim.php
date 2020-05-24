
    <!-- Page Header
    ================================================== -->
    <div id="tf-header">
        <div class="container"> <!-- container -->
            <h1>Bize Ulaşın</h1>            
        </div><!-- end container -->
    </div>

    <!-- Contact Section
    ================================================== -->
    <div id="tf-contact" class="contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Feel Free to <span class="highlight"><strong>Contact Us</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
            
            <div class="row text-center"> <!-- contact form outer row with centered text-->

                <div class="col-md-5 col-md-offset-1">
                   <form id="contact-form" class="form" name="sentMessage" novalidate> <!-- form wrapper -->
                    <div class="form-group"> <!-- Your name input -->
                        <input type="text" autocomplete="off" class="form-control" placeholder="Adınız " id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="form-group"> <!-- Your email input -->
                        <input type="email" autocomplete="off" class="form-control" placeholder="E-posta adresiniz." id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="form-group"> <!-- Your email input -->
                        <input type="text" autocomplete="off" class="form-control" placeholder="Telefon numaranız." id="phone" required data-validation-required-message="Please enter your phone no.">
                        <p class="help-block text-danger"></p>
                    </div>

                    <!-- Message Text area -->
                    <div class="form-group"> <!-- Your email input -->
                        <textarea class="form-control" rows="7" placeholder="İletmek istediğiniz mesajınız..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                        <div id="success"></div>
                    </div>
                    <button type="submit" class="btn btn-primary tf-btn color">Gönder</button> <!-- Send button -->

                </form>
            </div>

            <div class="col-md-5">
                <div id="map"></div>  <!-- google map -->
            </div>

        </div> <!-- end contact form outer row with centered text-->

        <div class="row"> <!-- outer row -->
            <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                <div class="row"> <!-- nested row -->

                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">  
                        <div class="contact-detail">
                            <i class="fa fa-map-marker"></i>
                            <h4><?php echo $ayarcek['ayar_adres']; ?><br /><?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></h4> <!-- address -->
                        </div>
                    </div>
                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-envelope-o"></i>
                            <h4><?php echo $ayarcek['ayar_mail']; ?></h4><!-- email add -->
                        </div>
                    </div>

                    <!-- contact detail using col 4 -->
                    <div class="col-md-4">
                        <div class="contact-detail">
                            <i class="fa fa-phone"></i>
                            <h4><?php echo $ayarcek['ayar_tel']; ?></h4> <!-- phone no. -->
                        </div>
                    </div>

                </div> <!-- end nested row -->
            </div> <!-- end col 10 with offset 1 to centered -->
        </div><!-- end outer row -->

    </div><!-- end container -->

</div>

