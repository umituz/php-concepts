<footer>
	<div class="container">
		<div class="units-row">
			<div class="unit-50">
				<p><?php echo $ayarcek['ayar_footer']; ?></p>
			</div>
			<div class="unit-50">
				<ul class="social list-flat right">
					<li><a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"><i class="fa fa-send"></i></a></li>
					<li><a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
					<li><a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
					<li><a href="<?php echo $ayarcek['ayar_google']; ?>"><i class="fa fa-google"></i></a></li>
					<li><a href="<?php echo $ayarcek['ayar_youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/kube.min.js"></script>
<script src="js/site.js"></script>
<script>
	function newTyped(){}$(function(){$("#typed").typed({
		// Change to edit type effect
		strings: ["Merhaba", "Nasılsın", "İİ"],

		typeSpeed:90,backDelay:700,contentType:"html",loop:!0,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});
	</script>
</body>
</html>