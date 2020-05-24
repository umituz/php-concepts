<?php 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
?>
<!-- contact -->
<div id="contact" class="footer center spacer">



	<div class="container">
		<div class="row">
			<div class="col-sm-offset-3 col-sm-6 contact-form">		
				<h3><?php echo $iletisimcek['iletisim_ad']; ?></h3>
				<p><?php echo $iletisimcek['iletisim_detay']; ?></p>
				<form  >
					<input type="text" name="form_name" class="form-control" placeholder="Tam adınız" >
					<input type="email"  name="form_email" class="form-control" placeholder="E-posta adresiniz">
					<textarea name="form_message" class="form-control" placeholder="İletmek istediğiniz mesaj" rows="5"></textarea>
					<input type="submit"  name="Submit" class="btn btn-primary btn-lg" value="Gönder">
				</form>
			</div>
		</div>

		
	</div>
</div>
<!-- contact -->


<a href="#top" class="toTop scroll"><i class="fa fa-angle-up"></i></a>


<!-- gridloading script -->
<script src="assets/gridloading/js/modernizr.custom.js"></script>
<script src="assets/gridloading/js/masonry.pkgd.min.js"></script>
<script src="assets/gridloading/js/imagesloaded.js"></script>
<script src="assets/gridloading/js/classie.js"></script>
<script src="assets/gridloading/js/AnimOnScroll.js"></script>
<!-- gridloading script -->


<script src="assets/scripts.js"></script>


</body>

</html>