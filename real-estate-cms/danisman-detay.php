<?php
include 'header.php';
$yonetmensor=$db->prepare("SELECT * FROM yonetmen WHERE yonetmen_id=:yonetmen_id");
$yonetmensor->execute(array(
	'yonetmen_id' => $_GET['yonetmen_id']
	));
$yonetmencek=$yonetmensor->fetch(PDO::FETCH_ASSOC);
extract($yonetmencek);
?>

<div role="main" class="main">

	<section class="page-header page-header-light page-header-more-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Bruno Doe</h1>
					<ul class="breadcrumb breadcrumb-valign-mid">
						<li><a href="demo-real-estate.html">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="demo-real-estate-agents.html">Agents</a></li>
						<li class="active">Bruno Doe</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="agent-item agent-item-detail">
					<div class="row">
						<div class="col-md-3">
							<img src="yonetim/dosyalar/resimler/yonetmen/<?php echo $yonetmen_resimyol; ?>" class="img-responsive" alt="">
						</div>
						<div class="col-md-5">
							<h2 class="mt-none mb-xs font-weight-normal text-uppercase"><?php echo $yonetmen_adsoyad; ?></h2>
							<h6 class="mb-xs">Real Estate Broker</h6>
							<div class="font-size-lg mt-xl mb-md">
								<p><?php echo $yonetmen_detay; ?></p>
							</div>
						</div>
						<div class="col-md-4">
							<ul class="list list-icons m-sm ml-xl">
								<li>
									<a href="mailto: mail@domain.com">
										<i class="icon-envelope-open icons"></i> <?php echo $yonetmen_mail; ?>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-call-out icons"></i> <?php echo $yonetmen_tel ?>
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
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="mt-xl">Contact Me</h4>

							<div class="alert alert-success hidden mt-lg" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden mt-lg" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>

							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-4">
											<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
										<div class="col-md-4">
											<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-secondary" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h4 class="mt-md mb-none">Agent Properties</h4>
				<div class="row mb-xlg">
					<ul class="properties-listing sort-destination p-none">
						<li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
							<div class="listing-item">
								<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
									<span class="thumb-info thumb-info-lighten">
										<span class="thumb-info-wrapper m-none">
											<img src="img/demos/real-estate/listings/listing-1.jpg" class="img-responsive" alt="">
											<span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
												for sale
											</span>
										</span>
										<span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
											$ 530,000
											<i class="fa fa-caret-right text-color-secondary pull-right"></i>
										</span>
										<span class="custom-thumb-info-title b-normal p-lg">
											<span class="thumb-info-inner text-md">South Miami</span>
											<ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
												<li>
													<span class="accomodation-title">
														Beds:
													</span>
													<span class="accomodation-value custom-color-1">
														3
													</span>
												</li>
												<li>
													<span class="accomodation-title">
														Baths:
													</span>
													<span class="accomodation-value custom-color-1">
														2
													</span>
												</li>
												<li>
													<span class="accomodation-title">
														Sq Ft:
													</span>
													<span class="accomodation-value custom-color-1">
														500
													</span>
												</li>
											</ul>
										</span>
									</span>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
							<div class="listing-item">
								<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
									<span class="thumb-info thumb-info-lighten">
										<span class="thumb-info-wrapper m-none">
											<img src="img/demos/real-estate/listings/listing-2.jpg" class="img-responsive" alt="">
											<span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
												for sale
											</span>
										</span>
										<span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
											$ 320,000
											<i class="fa fa-caret-right text-color-secondary pull-right"></i>
										</span>
										<span class="custom-thumb-info-title b-normal p-lg">
											<span class="thumb-info-inner text-md">Sunny Isles Beach</span>
											<ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
												<li>
													<span class="accomodation-title">
														Beds:
													</span>
													<span class="accomodation-value custom-color-1">
														3
													</span>
												</li>
												<li>
													<span class="accomodation-title">
														Baths:
													</span>
													<span class="accomodation-value custom-color-1">
														2
													</span>
												</li>
												<li>
													<span class="accomodation-title">
														Sq Ft:
													</span>
													<span class="accomodation-value custom-color-1">
														500
													</span>
												</li>
											</ul>
										</span>
									</span>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
							<div class="listing-item">
								<a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
									<span class="thumb-info thumb-info-lighten">
										<span class="thumb-info-wrapper m-none">
											<img src="img/demos/real-estate/listings/listing-3.jpg" class="img-responsive" alt="">
											<span class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
												for rent
											</span>
										</span>
										<span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
											$ 3000 / month
											<i class="fa fa-caret-right text-color-secondary pull-right"></i>
										</span>
										<span class="custom-thumb-info-title b-normal p-lg">
											<span class="thumb-info-inner text-md">Miami</span>
											<ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
												<li>
													<span class="accomodation-title">
														Beds:
													</span>
													<span class="accomodation-value custom-color-1">
														3
													</span>
												</li>
												<li>
													<span class="accomodation-title">
														Baths:
													</span>
													<span class="accomodation-value custom-color-1">
														2
													</span>
												</li>
												<li>
													<span class="accomodation-title">
														Sq Ft:
													</span>
													<span class="accomodation-value custom-color-1">
														500
													</span>
												</li>
											</ul>
										</span>
									</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<?php include 'footer.php'; ?>