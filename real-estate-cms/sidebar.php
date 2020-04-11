<?php 
$yonetmensor=$db->prepare("SELECT * FROM yonetmen WHERE yonetmen_id=:yonetmen_id");
$yonetmensor->execute(array('yonetmen_id' => $yonetmen_id));
$yonetmencek=$yonetmensor->fetch(PDO::FETCH_ASSOC);
extract($yonetmencek);
?>
<div class="col-md-3">
	<aside class="sidebar">
		<div style="background: purple;" class="agents text-color-light center">
			<h4 class="text-light pt-xl m-none">Satış Danışmanı</h4>
			<div class="owl-carousel owl-theme nav-bottom rounded-nav pl-xs pr-xs pt-md m-none" data-plugin-options='{"items": 1, "loop": false, "dots": false, "nav": true}'>
				<div class="pr-sm pl-sm">
					<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
						<span class="agent-thumb">
							<img style="width: 100px; height: 80px;" class="img-responsive img-circle" src="yonetim/dosyalar/resimler/yonetmen/<?php echo $yonetmen_resimyol; ?>" alt />
						</span>
						<span class="agent-infos text-light pt-md">
							<strong class="text-uppercase font-weight-bold"><?php echo $yonetmen_adsoyad; ?></strong>
							<span class="font-weight-light"><?php echo $yonetmen_tel; ?></span>
							<span class="font-weight-light"><?php echo $yonetmen_mail; ?></span>
						</span>
					</a>
					<hr>
				</div>						
			</div>
		</div>

		<h4 class="pt-lg mb-md text-color-dark">Request Information</h4>
		<p>Contact us or give us a call to request more information</p>

		<form id="contactForm" action="php/contact-form.php" method="POST" class="mb-lg">
			<div class="row">
				<div class="form-group">
					<div class="col-md-12">
						<label>Your name *</label>
						<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-md-12">
						<label>Your email address *</label>
						<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-md-12">
						<label>Subject</label>
						<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-md-12">
						<label>Message *</label>
						<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message" required></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<input type="submit" value="Send Message" class="btn btn-secondary mb-xl" data-loading-text="Loading...">

					<div class="alert alert-success hidden" id="contactSuccess">
						Message has been sent to us.
					</div>

					<div class="alert alert-danger hidden" id="contactError">
						Error sending your message.
					</div>
				</div>
			</div>
		</form>

	</aside>
</div>