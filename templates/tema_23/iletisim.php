<?php 
include 'header.php';
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
?>

<!-- Page Title -->
<div class="page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
				<span aria-hidden="true" class="icon_mail"></span>
				<h1><?php echo $iletisimcek['iletisim_ad'];?></h1>
			</div>
		</div>
	</div>
</div>

<!-- Contact Us -->
<div class="contact-us-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 contact-form wow fadeInLeft">
				<p><?php echo $iletisimcek['iletisim_detay']; ?></p>
				<form role="form" action="assets/contact.php" method="post">
					<div class="form-group">
						<label for="contact-name">Ad</label>
						<input type="text" name="name" placeholder="Tam adınız..." class="contact-name form-control" id="contact-name">
					</div>
					<div class="form-group">
						<label for="contact-email">E-posta</label>
						<input type="text" name="email" placeholder="E-posta adresiniz..." class="contact-email form-control" id="contact-email">
					</div>
					<div class="form-group">
						<label for="contact-subject">Konu</label>
						<input type="text" name="subject" placeholder="Konu..." class="contact-subject form-control" id="contact-subject">
					</div>
					<div class="form-group">
						<label for="contact-message">Mesaj</label>
						<textarea name="message" placeholder="İletmek istediğiniz mesajınız..." class="contact-message form-control" id="contact-message"></textarea>
					</div>
					<button type="submit" class="btn">Gönder</button>
				</form>
			</div>
			<div class="col-sm-5 contact-address wow fadeInUp">
				<h3>Ulaşmak için</h3>
				<div class="map"></div>
				<h3>Adres</h3>
				<p><?php echo $ayarcek['ayar_adres']; ?> <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></p>
				<p><?php echo $ayarcek['ayar_tel']; ?></p>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>