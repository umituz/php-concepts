  <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

           <div class="col-four tab-full mob-full footer-info">            

             <div class="footer-logo"></div>

             <p>
              <?php echo $ayarcek['ayar_adres']; ?><br>
              <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?><br>
              <?php echo $ayarcek['ayar_mail']; ?> &nbsp; <?php echo $ayarcek['ayar_tel']; ?>
           </p>

        </div> <!-- /footer-info -->

        <div class="col-two tab-1-3 mob-1-2 site-links">

         <h4>Site Links</h4>

         <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy Policy</a></li>
       </ul>

    </div> <!-- /site-links -->  

    <div class="col-two tab-1-3 mob-1-2 social-links">

      <h4>Social</h4>

      <ul>
       <li><a href="<?php echo $ayarcek['ayar_twitter']; ?>">Twitter</a></li>
       <li><a href="<?php echo $ayarcek['ayar_facebook']; ?>">Facebook</a></li>
       <li><a href="<?php echo $ayarcek['ayar_dribble']; ?>">Dribbble</a></li>
       <li><a href="<?php echo $ayarcek['ayar_google']; ?>">Google+</a></li>
       <li><a href="<?php echo $ayarcek['ayar_skype']; ?>">Skype</a></li>
    </ul>

 </div> <!-- /social --> 

 <div class="col-four tab-1-3 mob-full footer-subscribe">

   <h4>Haber Bülteni</h4>

   <p>En son çıkan haberlerden anında haberdar olmak istiyorsan, bültenimize kayıt olun!</p>

   <div class="subscribe-form">

    <form id="mc-form" class="group" novalidate="true">

       <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="E-posta adresinizi giriniz..." required=""> 

       <input type="submit" name="subscribe" >

       <label for="mc-email" class="subscribe-message"></label>

    </form>

 </div>	      		

</div> <!-- /subscribe -->         

</div> <!-- /row -->

</div> <!-- /footer-main -->


<div class="footer-bottom">

 <div class="row">

  <div class="col-twelve">
   <div class="copyright">
      <span>© 2017 <?php echo $ayarcek['ayar_footer']; ?></span> 
      <span>Kim Yaptı : <?php echo $ayarcek['ayar_author']; ?></span>		         	
   </div>

   <div id="go-top" style="display: block;">
     <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon ion-android-arrow-up"></i></a>
  </div>         
</div>

</div> <!-- /footer-bottom -->     	

</div>

</footer>  

<div id="preloader"> 
  <div id="loader"></div>
</div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>