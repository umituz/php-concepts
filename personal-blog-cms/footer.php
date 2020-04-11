<footer>	
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p><span><?php echo $ayar_footer; ?></p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<?php 
						$sosyalsor=$db->prepare("SELECT * FROM sosyal");
						$sosyalsor->execute();
						$sosyalcek=$sosyalsor->fetch(PDO::FETCH_ASSOC);
						extract($sosyalcek);
						?>
						<li><a target="_blank" href="<?php echo $sosyal_facebook; ?>" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="<?php echo $sosyal_twitter; ?>" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a target="_blank" href="<?php echo $sosyal_linkedin; ?>" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a target="_blank" href="<?php echo $sosyal_pinterest; ?>" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a target="_blank" href="<?php echo $sosyal_google; ?>" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a target="_blank" href="<?php echo $sosyal_youtube; ?>" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></li>
						<li><a target="_blank" href="<?php echo $sosyal_github; ?>" data-placement="top" title="Github"><i class="fa fa-github"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/portfolio/jquery.quicksand.js"></script>
	<script src="js/portfolio/setting.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>