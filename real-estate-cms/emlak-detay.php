<?php
include 'header.php';
$emlaksor=$db->prepare("SELECT * FROM emlak WHERE emlak_id=:emlak_id");
$emlaksor->execute(array('emlak_id' => $_GET['emlak_id']));
$emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC);
extract($emlakcek);
$yonetmen_id=$yonetmen_id;
?>

<div role="main" class="main">

	<section class="page-header page-header-light page-header-more-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo $emlak_ad; ?><span><?php echo $emlak_adres; ?><a href="#map" data-hash data-hash-offset="100"> ( Haritadan İncele)</a></span></h1>
					<ul class="breadcrumb breadcrumb-valign-mid">
						<li><a href="demo-real-estate.html">Home</a></li>
						<li><a href="demo-real-estate-properties.html">Properties</a></li>
						<li class="active">Detail</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row pb-xl pt-md">
			<div class="col-md-9">

				<div class="row">
					<div class="col-md-7">

						<span style="<?php 
						if ($emlak_durum=="KİRALIK") {
							echo 'background:purple !important';
						}elseif ($emlak_durum=="SATILIK") {
							echo 'background:green !important';
						} ?>" class="thumb-info-listing-type thumb-info-listing-type-detail background-color-secondary text-uppercase text-color-light font-weight-semibold p-sm pl-md pr-md">
						<?php echo $emlak_durum; ?>
					</span>

					<div class="thumb-gallery">
						<div class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
							<div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
								<div>
									<a href="dosyalar/resimler/emlak/<?php echo $emlak_resimyol; ?>">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
											<span class="thumb-info-wrapper font-size-xl">
												<img alt="Property Detail" src="dosyalar/resimler/emlak/<?php echo $emlak_resimyol; ?>" class="img-responsive">
												<span class="thumb-info-title font-size-xl">
													<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div>
									<a href="img/demos/real-estate/listings/listing-detail-2.jpg">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
											<span class="thumb-info-wrapper font-size-xl">
												<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-2.jpg" class="img-responsive">
												<span class="thumb-info-title font-size-xl">
													<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div>
									<a href="img/demos/real-estate/listings/listing-detail-3.jpg">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
											<span class="thumb-info-wrapper font-size-xl">
												<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-3.jpg" class="img-responsive">
												<span class="thumb-info-title font-size-xl">
													<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
								<div>
									<a href="img/demos/real-estate/listings/listing-detail-4.jpg">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
											<span class="thumb-info-wrapper font-size-xl">
												<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-4.jpg" class="img-responsive">
												<span class="thumb-info-title font-size-xl">
													<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
						</div>

						<div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
							<div>
								<img alt="Property Detail" src="dosyalar/resimler/emlak/<?php echo $emlak_resimyol; ?>" class="img-responsive cur-pointer">
							</div>
							<div>
								<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-2-thumb.jpg" class="img-responsive cur-pointer">
							</div>
							<div>
								<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-3-thumb.jpg" class="img-responsive cur-pointer">
							</div>
							<div>
								<img alt="Property Detail" src="img/demos/real-estate/listings/listing-detail-4-thumb.jpg" class="img-responsive cur-pointer">
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-5">

					<table class="table table-striped">
						<colgroup>
						<col width="35%">
						<col width="65%">
					</colgroup>
					<tbody>						
						<tr>
							<td class="background-color-primary text-light pt-md">
								Fiyat
							</td>
							<td class="font-size-xl font-weight-bold pt-sm pb-sm background-color-primary text-light">
								<?php echo $emlak_fiyat; ?> ₺
							</td>
						</tr>
						<tr>
							<td>
								Eklenme Tarihi
							</td>
							<td>
								<?php echo $emlak_zaman; ?>
							</td>
						</tr>
						<tr>
							<td>
								İlan Numarası
							</td>
							<td>
								<?php echo $emlak_id; ?>
							</td>
						</tr>
						<tr>
							<td>
								Adres
							</td>
							<td>
								<?php echo $emlak_adres; ?><br><a href="#map" class="font-size-sm" data-hash data-hash-offset="100">(Harita Adresi)</a>
							</td>
						</tr>
						<tr>
							<td>
								Durum
							</td>
							<td>
								<?php echo $emlak_durum; ?>
							</td>
						</tr>						
					</tbody>
				</table>

			</div>
		</div>

		<div class="row">
			<div class="col-md-12">

				<h4 class="mt-md mb-md">İlan Açıklaması</h4>
				<div align="justify"><p><?php echo $emlak_detay; ?></p></div>

				<hr class="solid tall">

				<h4 class="mt-md mb-md">Features</h4>

				<ul class="list list-icons list-secondary row m-none">
					<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Air conditioning <a href="#" data-plugin-tooltip data-toggle="tooltip" data-placement="top" title="+ Central Heating"><i class="fa fa-info-circle"></i></a></li>
					<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Home Theater</li>
					<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Central Heating</li>
					<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Laundry</li>
					<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Balcony</li>
					<li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Storage</li>
					<li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Garage</li>
					<li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Yard</li>
					<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Electric Water Heater</li>
					<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Deck</li>
					<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Gym</li>
					<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Ocean View</li>
				</ul>

				<hr class="solid tall">

				<h4 class="mt-md mb-md" id="map">Harita Adresi</h4>
				<div id="googlemaps" class="google-map m-none mb-xlg"></div>

			</div>
		</div>

	</div>

	<?php include 'sidebar.php'; ?>

</div>

</div>

<?php include 'footer.php'; ?>