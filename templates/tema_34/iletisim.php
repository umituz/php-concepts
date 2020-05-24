<?php 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
 ?>		<!--
        Contact Us
        ==================================== -->		

        <section id="contact" class="contact">
        	<div class="container">
        		<div class="row mb50">

        			<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
        				<h2><?php echo $iletisimcek['iletisim_ad']; ?></h2>
        				<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
        			</div>

        			<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
        				<p><?php echo $iletisimcek['iletisim_detay']; ?></p>
        			</div>

        			<!-- contact address -->
        			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
        				<div class="contact-address">
        					<h3>Adres Bilgilerimiz</h3>
        					<p><?php echo $ayarcek['ayar_adres']; ?></p>
        					<p><?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></p>
        					<p>Websitesi : <?php echo $ayarcek['ayar_siteurl']; ?></p>
        					<p>Telefon : <?php echo $ayarcek['ayar_tel']; ?></p>
        					<p>E-posta : <?php echo $ayarcek['ayar_mail']; ?></p>
        				</div>
        			</div>
        			<!-- end contact address -->

        			<!-- contact form -->
        			<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
        				<div class="contact-form">
        					<h3>Bi Merhaba De!</h3>
        					<form action="#" id="contact-form">
        						<div class="input-group name-email">
        							<div class="input-field">
        								<input type="text" name="name" id="name" placeholder="Tam adınız" class="form-control">
        							</div>
        							<div class="input-field">
        								<input type="email" name="email" id="email" placeholder="E-posta adresiniz" class="form-control">
        							</div>
        						</div>
        						<div class="input-group">
        							<textarea name="message" id="message" placeholder="Mesajınız" class="form-control"></textarea>
        						</div>
        						<div class="input-group">
        							<input type="submit" id="form-submit" class="pull-right" value="Gönder">
        						</div>
        					</form>
        				</div>
        			</div>
        			<!-- end contact form -->

        			<!-- footer social links -->
        			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
        				<ul class="footer-social">
        					<li><a href="<?php echo $ayarcek['ayar_behance']; ?>"><i class="fa fa-behance fa-2x"></i></a></li>
        					<li><a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter fa-2x"></i></a></li>
        					<li><a href="<?php echo $ayarcek['ayar_dribbble']; ?>"><i class="fa fa-dribbble fa-2x"></i></a></li>
        					<li><a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook fa-2x"></i></a></li>
        				</ul>
        			</div>
        			<!-- end footer social links -->

        		</div>
        	</div>

        	<!-- Google map -->
        	<div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
        	<!-- End Google map -->

        </section>

        <!--
        End Contact Us
        ==================================== -->