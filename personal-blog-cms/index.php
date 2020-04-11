<?php
include 'header.php';
include 'slider.php';
?>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Mobil Uyumlu</h4>
								<div class="icon">
									<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
									Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
								
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Harika Görünüm</h4>
								<div class="icon">
									<i class="fa fa-pagelines fa-3x"></i>
								</div>
								<p>
									Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
								
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Talebe Göre Düzen</h4>
								<div class="icon">
									<i class="fa fa-edit fa-3x"></i>
								</div>
								<p>
									Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
								
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Temiz Kod</h4>
								<div class="icon">
									<i class="fa fa-code fa-3x"></i>
								</div>
								<p>
									Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
								</p>
								
							</div>
							<div class="box-bottom">
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Son Çalışmalar</h4>
				<div class="row">
					<section id="projects">
						<ul id="thumbs" class="portfolio">
							<!-- Item Project and Filter Name -->
							<?php 
							$referanssor=$db->prepare("SELECT * FROM referans ORDER BY referans_id DESC LIMIT 8");
							$referanssor->execute();
							while ($referanscek=$referanssor->fetch(PDO::FETCH_ASSOC)) { extract($referanscek); ?>								
							<li class="col-lg-3 design" data-id="id-0" data-type="web">
								<div class="item-thumbs">
									<!-- Fancybox - Gallery Enabled - Title - Full Image -->
									<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $referans_ad; ?>" href="yonetim/upload/resim/referans/<?php echo $referans_resimyol; ?>">
										<span class="overlay-img"></span>
										<span class="overlay-img-thumb font-icon-plus"></span>
									</a>
									<!-- Thumb Image and Description -->
									<img style="width:300px; height:200px;" src="yonetim/upload/resim/referans/<?php echo $referans_resimyol; ?>" alt="<?php echo $referans_detay.' '.$referans_link; ?>">
								</div>
							</li>
							<?php } ?>
							<!-- End Item Project -->							
						</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
</section>

<?php include 'footer.php'; ?>