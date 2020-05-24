<!--start: Container -->
<div class="container">		

	<!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">

			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span1">
					<div id="footer-menu-logo">
						<a href="#"><img src="img/logo-footer-menu.png" alt="logo" /></a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span10">

					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="index.php">Anasayfa</a></li>

							<li><a href="hakkimizda.php">Hakkımızda</a></li>

							<li><a href="hizmetler.php">Hizmetler</a></li>

							<li><a href="ucretlendirme.php">Ücretlendirme</a></li>

							<li><a href="iletisim.php">İletişim</a></li>

						</ul>

					</div>

				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">

					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>

				</div>
				<!-- end: Footer Menu Back To Top -->

			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">

		<!-- start: Container -->
		<div class="container">

			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">

					<h3>About Us</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
					</p>

				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">

					<h3>Photo Stream</h3>
					<div class="flickr-widget">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
						<div class="clear"></div>
					</div>

				</div>
				<!-- end: Photo Stream -->


				<div class="span6">

					<!-- start: Follow Us -->
					<h3>Bizi Takip Edin!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="<?php echo $ayarcek['ayar_twitter']; ?>"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="<?php echo $ayarcek['ayar_twitter']; ?>"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="<?php echo $ayarcek['ayar_facebook']; ?>"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="<?php echo $ayarcek['ayar_facebook']; ?>"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-dribbble">
											<a href="<?php echo $ayarcek['ayar_dribble']; ?>"></a>
										</div>
										<div class="social-info-back social-dribbble-hover">
											<a href="<?php echo $ayarcek['ayar_dribble']; ?>"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-flickr">
											<a href="<?php echo $ayarcek['ayar_youtube']; ?>"></a>
										</div>
										<div class="social-info-back social-flickr-hover">
											<a href="<?php echo $ayarcek['ayar_youtube']; ?>"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->

					<!-- start: Newsletter -->
					<form id="newsletter">
						<h3>Haber Bülteni</h3>
						<p>Bize bir mesaj bırakın...</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="Gönder">
					</form>
					<!-- end: Newsletter -->

				</div>

			</div>
			<!-- end: Row -->	

		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

</div>
<!-- end: Container  -->

</div>
<!-- end: Wrapper  -->


<!-- start: Copyright -->
<div id="copyright">

	<!-- start: Container -->
	<div class="container">

		<p>
			<?php echo $ayarcek['ayar_footer']; ?> => <?php echo $ayarcek['ayar_author']; ?>
		</p>

	</div>
	<!-- end: Container  -->

</div>	
<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
