
<!--Footer -->
<div class="col-md-12 footer-box">


    <div class="row small-box ">
        <strong>Mobiles :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> | 
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
        <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | 
        <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  
        <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

    </div>
    <div class="row small-box ">
        <strong>Laptops :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Laptops</a> | 
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
        <a href="#">Sony Laptops</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | 
        <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  
        <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
    </div>
    <div class="row small-box ">
        <strong>Tablets : </strong><a href="#">samsung</a> |  <a href="#">Sony Tablets</a> | <a href="#">Microx</a> | 
        <a href="#">samsung </a>|  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
        <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | 
        <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  
        <a href="#">Sony</a> | <a href="#">Microx Tablets</a> | view all items

    </div>
    <div class="row small-box pad-botom ">
        <strong>Computers :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> | 
        <a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
        <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | 
        <a href="#">Microx Computers</a> |<a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Computers</a> |<a href="#">samsung</a> |  
        <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

    </div>
    <div class="row">
        <div class="col-md-4">
            <strong>Bir Mesaj Bırakın </strong>
            <hr>
            <form>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Ad-Soyad">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="E-posta">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Mesaj"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Gönder</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <strong>Adres Bilgilerimiz</strong>
            <hr>
            <p>
               <?php echo $ayarcek['ayar_adres']; ?><br />
               <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?><br />
               Telefon: <?php echo $ayarcek['ayar_tel']; ?><br>
               E-posta: <?php echo $ayarcek['ayar_mail']; ?><br>
           </p>

           <?php echo $ayarcek['ayar_footer']; ?>
       </div>
       <div class="col-md-4 social-box">
        <strong>Sosyal Medya Hesapları </strong>
        <hr>
        <a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook-square fa-3x "></i></a>
        <a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter-square fa-3x "></i></a>
        <a href="<?php echo $ayarcek['ayar_google']; ?>"><i class="fa fa-google-plus-square fa-3x c"></i></a>
        <a href="<?php echo $ayarcek['ayar_youtube']; ?>"><i class="fa fa-youtube-square fa-3x "></i></a>
        <p>
            Sosyal medya hesaplarımızdan bizi takip edebilirsiniz.
        </p>
    </div>
</div>
<hr>
</div>
<!-- /.col -->

<div class="col-md-12 end-box ">
    &copy; 2017 | &nbsp; Tüm hakları saklıdır. | &nbsp; www.umituz.com.tr | &nbsp; 7/24 Destek | &nbsp; <?php echo $ayarcek['ayar_mail']; ?> | <?php echo $ayarcek['ayar_footer']; ?>
</div>
<!-- /.col -->
<!--Footer end -->
<!--Core JavaScript file  -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--bootstrap JavaScript file  -->
<script src="assets/js/bootstrap.js"></script>
<!--Slider JavaScript file  -->
<script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
<script src="assets/ItemSlider/js/jquery.catslider.js"></script>
<script>
    $(function () {

        $('#mi-slider').catslider();

    });
</script>
</body>
</html>