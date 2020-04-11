<?php
include 'header.php';
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda");
$hakkimizdasor->execute();
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
extract($hakkimizdacek);
?>

<div role="main" class="main">

	<section class="page-header page-header-light page-header-more-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo $hakkimizda_baslik; ?></h1>
					<ul class="breadcrumb breadcrumb-valign-mid">
						<li><a href="demo-real-estate.html">Home</a></li>
						<li><a href="#">About</a></li>
						<li class="active">Who We Are</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row pb-xl pt-md">
			<div class="col-md-9">

				<p class="lead mb-xl">Founded in 1999 by John Doe, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

				<img width="400" class="img-responsive pull-right ml-xl mb-xl mt-xs" alt="" src="img/demos/real-estate/agency.jpg">

				<p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

				<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

				<div class="row">
					<div class="col-md-4">
						<h4 class="mt-xlg mb-md">Our Mission</h4>

						<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
					</div>
					<div class="col-md-4">
						<h4 class="mt-xlg mb-md">Our Vision</h4>

						<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
					</div>
					<div class="col-md-4">
						<h4 class="mt-xlg mb-md">Our Values</h4>

						<p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
					</div>
				</div>

			</div>
			<div class="col-md-3">
				<aside class="sidebar">
					<div class="agents text-color-light center">
						<h4 class="text-light pt-xl m-none">Our Agents</h4>
						<div class="owl-carousel owl-theme nav-bottom rounded-nav pl-xs pr-xs pt-md m-none" data-plugin-options='{"items": 1, "loop": false, "dots": false, "nav": true}'>
							<div class="pr-sm pl-sm">
								<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
									<span class="agent-thumb">
										<img class="img-responsive img-circle" src="img/team/team-11.jpg" alt />
									</span>
									<span class="agent-infos text-light pt-md">
										<strong class="text-uppercase font-weight-bold">Bruno Doe</strong>
										<span class="font-weight-light">123-456-789</span>
										<span class="font-weight-light">bruno@domain.com</span>
									</span>
								</a>
							</div>
							<div class="pr-sm pl-sm">
								<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
									<span class="agent-thumb">
										<img class="img-responsive img-circle" src="img/team/team-12.jpg" alt />
									</span>
									<span class="agent-infos text-light pt-md">
										<strong class="text-uppercase font-weight-bold">Jeff doe</strong>
										<span class="font-weight-light">123-456-789</span>
										<span class="font-weight-light">jeffdoe@domain.com</span>
									</span>
								</a>
							</div>
							<div class="pr-sm pl-sm">
								<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
									<span class="agent-thumb">
										<img class="img-responsive img-circle" src="img/team/team-13.jpg" alt />
									</span>
									<span class="agent-infos text-light pt-md">
										<strong class="text-uppercase font-weight-bold">Jessica Doe</strong>
										<span class="font-weight-light">123-456-789</span>
										<span class="font-weight-light">jessicadoe@domain.com</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="newsletter box-shadow-custom p-xlg center">
						<i class="icon-envelope-letter icons"></i>
						<h4 class="mt-xs mb-xs">
							Newsletter
						</h4>
						<p>
							Subscribe and be the first to know about our best offers
						</p>

						<div class="alert alert-success hidden" id="newsletterSuccess">
							<strong>Success!</strong> You've been added to our email list.
						</div>

						<div class="alert alert-danger hidden" id="newsletterError"></div>

						<form id="newsletterForm" class="text-black pt-sm" action="php/newsletter-subscribe.php" method="POST">
							<input class="form-control" placeholder="Your Name *" name="newsletterName" id="newsletterName" type="text">
							<input class="form-control" placeholder="Your Email Address *" name="newsletterEmail" id="newsletterEmail" type="text">
							<button class="btn btn-default text-uppercase background-color-secondary pt-sm pr-xlg pb-sm pl-xlg mt-xlg text-light" type="submit">Subscribe</button>
						</form>
					</div>
				</aside>
			</div>
		</div>

	</div>

	<?php include 'footer.php'; ?>