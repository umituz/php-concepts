<!--FOOTER SECTION -->

<div id="footer">
    <div class="row">
        <div class="col-md-4">
            <h4>Quick Information :</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
            </p>
            <button type="submit" class="btn btn-primary">Get Quote</button>
        </div>
        <div class="col-md-4">
            <h4>Yardıma İhtiyacın Var Mı? Eğer varsa bize yazın... </h4>
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
                            <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="İletmek istediğiniz mesajınız..."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Gönder</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
            <a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
            <a href="<?php echo $ayarcek['ayar_google']; ?>"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
            <a href="<?php echo $ayarcek['ayar_linkedin']; ?>"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
            <a href="<?php echo $ayarcek['ayar_pinterest']; ?>"><i class="fa fa-pinterest-square fa-3x color-pinterest"></i></a>
            <hr>
            <p>
                <?php echo $ayarcek['ayar_adres']; ?><br>
                <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?><br>
                Telefon: <?php echo $ayarcek['ayar_tel']; ?><br>
                E-posta: <?php echo $ayarcek['ayar_mail']; ?><br>
            </p>

            <?php echo $ayarcek['ayar_footer']; ?> <br>
        </div>
    </div>


</div>

<!--END FOOTER SECTION -->
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY LIBRARY -->
<script src="assets/js/jquery.js"></script>
<!-- CORE BOOTSTRAP LIBRARY -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- SLIDER SCRIPTS LIBRARY -->
<script src="assets/Slides-SlidesJS-3/examples/playing/js/jquery.slides.min.js"></script>
<!-- CUSTOM SCRIPT-->
<script>
    $(document).ready(function () {
        $('#slides').slidesjs({
            width: 940,
            height: 528,
            play: {
                active: true,
                auto: true,
                interval: 4000,
                swap: true
            }
        });
    });

</script>

</body>
</html>
