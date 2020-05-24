
<div class="footer-wrapper">
    <div class="container">
        <div class="site-footer">
            <div class="row-fluid">
                <div class="span3">
                    <div class="block">
                        <h1>ipsum dolor</h1>
                        <ul>
                            <li><a href="#">Duis suscipit tellus nisigra</a></li>
                            <li><a href="#">Lorem ipsum dolor sit </a></li>
                            <li><a href="#">Cras elementum justo sed</a></li>
                            <li><a href="#">Sed in nulla a quam </a></li>
                            <li><a href="#">Donec a sem vehicula</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="block">
                        <h1>Aenean eteros</h1>
                        <ul>
                            <li><a href="#">Cuis suscipit tellus nisigra</a></li>
                            <li><a href="#">Korem ipsum dolor sit </a></li>
                            <li><a href="#">Dras elementum justo sed</a></li>
                            <li><a href="#">Eed in nulla a quam </a></li>
                            <li><a href="#">Fonec a sem vehicula</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="block">
                        <h1>Nulla nonmi</h1>
                        <ul>
                            <li><a href="#">Luis suscipit tellus nisigra</a></li>
                            <li><a href="#">Oorem ipsum dolor sit </a></li>
                            <li><a href="#">Uras elementum justo sed</a></li>
                            <li><a href="#">Ted in nulla a quam </a></li>
                            <li><a href="#">Nonec a sem vehicula</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="block">
                        <h1>Phasellus cons</h1>
                        <ul>
                            <li>

                                <i class="fw-icon-mobile-phone icon2"></i>

                                <div class="info">
                                    <span>Telefon </span><br><a href="#"><?php echo $ayarcek['ayar_tel']; ?></a>
                                </div>
                            </li>
                            <li>

                                <i class="fw-icon-envelope-alt icon2"></i>

                                <div class="info">
                                    <span>E-posta</span><br><a href="#"><?php echo $ayarcek['ayar_mail']; ?></a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div style="color:white;" class="copy-rights">
            Copyright (c) <?php echo $ayarcek['ayar_footer']; ?>
        </div>
    </div>
</div>



<script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.js"></script>
<script src="js/classie.js"></script>
<script src="js/AnimOnScroll.js"></script>

<script>
  new AnimOnScroll( document.getElementById( 'grid' ), {
    minDuration : 0.4,
    maxDuration : 0.7,
    viewportFactor : 0.2
} );
</script>
<script>
    $('#myCarousel').carousel({
        interval: 1800
    });
</script>

</body>
</html>
