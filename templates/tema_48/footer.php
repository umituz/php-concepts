<!-- FOOTER -->
<footer>
 <div class="line">
  <div class="s-12 l-6">
   <p style="color:white"><?php echo $ayarcek['ayar_footer']; ?></p>
   
 </div>
 <div class="s-12 l-6">
   <a style="color:white" class="right" href="#" title="Ümit UZ"><?php echo $ayarcek['ayar_author']; ?></a>
 </div>
</div>
</footer>
<script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">
 jQuery(document).ready(function($) {
  var theme_slider = $("#owl-demo");
  $("#owl-demo").owlCarousel({
    navigation: false,
    slideSpeed: 300,
    paginationSpeed: 400,
    autoPlay: 6000,
    addClassActive: true,
             // transitionStyle: "fade",
             singleItem: true
           });
  $("#owl-demo2").owlCarousel({
    slideSpeed: 300,
    autoPlay: true,
    navigation: true,
    navigationText: ["&#xf007","&#xf006"],
    pagination: false,
    singleItem: true
  });

            // Custom Navigation Events
            $(".next-arrow").click(function() {
              theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
              theme_slider.trigger('owl.prev');
            })     
          }); 
        </script>
      </body>
      </html>