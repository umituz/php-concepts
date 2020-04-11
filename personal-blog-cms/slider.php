<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Slider -->
				<div id="main-slider" class="flexslider">
					<ul class="slides">
						<?php 
						$slidersor=$db->prepare("SELECT * FROM slider");
						$slidersor->execute();
						while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { extract($slidercek); ?>
						<li>
							<img class="img-responsive" style="width:1250px; height:500px;" src="yonetim/upload/resim/slider/<?php echo $slider_resimyol; ?>" alt="<?php echo $slider_ad; ?>" />
							<div class="flex-caption">
								<h3><?php echo $slider_ad; ?></h3> 
								<p><?php echo $slider_detay; ?></p>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>	
</section>