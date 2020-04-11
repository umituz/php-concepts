<?php include 'header.php'; ?>

<div role="main" class="main">

	<section class="page-header page-header-light page-header-more-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Contact</h1>
					<ul class="breadcrumb breadcrumb-valign-mid">
						<li><a href="demo-real-estate.html">Home</a></li>
						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row">
			<div class="col-md-8">

				<h4 class="heading-primary mt-lg">Send a Message</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

				<div class="alert alert-success hidden mt-lg" id="contactSuccess">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div class="alert alert-danger hidden mt-lg" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
					<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
				</div>

				<form id="contactForm" action="php/contact-form.php" method="POST">
					<input type="hidden" value="Contact Form" name="subject" id="subject">
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label>Your name *</label>
								<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
							</div>
							<div class="col-md-6">
								<label>Your email address *</label>
								<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Message *</label>
								<textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="Send Message" class="btn btn-secondary mb-xlg" data-loading-text="Loading...">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4">

				<h4 class="heading-primary mt-lg">The Office</h4>
				<ul class="list list-icons mt-md">
					<li>
						<a href="mailto: mail@domain.com">
							<i class="icon-envelope-open icons"></i> mail@domain.com
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-call-out icons"></i> (800) 123-4567
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-social-linkedin icons"></i> Lindekin
						</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-social-facebook icons"></i> Facebook
						</a>
					</li>
				</ul>

				<hr class="solid mt-xlg mb-xlg">

				<h4 class="heading-primary">Business Hours</h4>
				<ul class="list list-icons mt-md">
					<li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
					<li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
					<li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
				</ul>

			</div>

		</div>

	</div>

	<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
	<div id="googlemaps" class="google-map mt-xlg mb-none"></div>

	<?php include 'footer.php'; ?>