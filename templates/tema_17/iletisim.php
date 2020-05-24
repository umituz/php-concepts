<?php 
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Contact us -->
<div class="contact-container section-container section-container-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 contact section-description wow fadeIn">
				<h2><?php echo $iletisimcek['iletisim_ad']; ?></h2>
				<div class="divider-1 wow fadeInUp"><span></span></div>
				<p><?php echo $iletisimcek['iletisim_detay']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 contact-form wow fadeInLeft">
				<form role="form" action="assets/contact.php" method="post">
					<div class="form-group">
						<label class="sr-only" for="contact-email">E-posta</label>
						<input type="text" name="email" placeholder="E-posta adresiniz..." class="contact-email" id="contact-email">
					</div>
					<div class="form-group">
						<label class="sr-only" for="contact-subject">Konu</label>
						<input type="text" name="subject" placeholder="Konu nedir?" class="contact-subject" id="contact-subject">
					</div>
					<div class="form-group">
						<label class="sr-only" for="contact-message">Mesaj</label>
						<textarea name="message" placeholder="İletmek istediğiniz mesaj..." class="contact-message" id="contact-message"></textarea>
					</div>
					<button type="submit" class="btn">Gönder</button>
				</form>
			</div>
		</div>
	</div>
</div>