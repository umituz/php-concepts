<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                 <a style="color:white;" target="_blank" href="#" title="Ümit UZ"><?php echo $ayarcek['ayar_footer']; ?>&copy; 2017</a>. 
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="icon-facebook"></i></a></li>
                    <li><a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="icon-twitter"></i></a></li>
                    <li><a href="<?php echo $ayarcek['ayar_pinterest']; ?>"><i class="icon-pinterest"></i></a></li>
                    <li><a href="<?php echo $ayarcek['ayar_linkedin']; ?>"><i class="icon-linkedin"></i></a></li>
                    <li><a href="<?php echo $ayarcek['ayar_google']; ?>"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="<?php echo $ayarcek['ayar_youtube']; ?>"><i class="icon-youtube"></i></a></li>
                    <li><a href="<?php echo $ayarcek['ayar_instagram']; ?>"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>