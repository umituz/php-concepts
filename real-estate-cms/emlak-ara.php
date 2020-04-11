<?php 
include 'header.php';
?>

<div role="main" class="main">
	
	<div class="container">
		<div class="row pt-xlg mt-xlg">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<h2 class="font-weight-normal mb-xs">
							Listelenen
							<strong class="text-color-secondary font-weight-extra-bold"><?php echo $_POST["emlak_durum"]; ?></strong>
							<span class="font-weight-light">
								Emlaklar
							</h2>
						</div>
					</div>
					<div class="row">
						<ul id="listingLoadMoreWrapper" class="properties-listing sort-destination p-none" data-total-pages="2">

							<?php 
							if (empty($_POST["aranan"])) {
								$emlaksor=$db->prepare("SELECT * FROM emlak WHERE emlak_durum=:durum and emlak_fiyat>:enaz_fiyat and emlak_fiyat<:encok_fiyat ORDER BY emlak_zaman DESC");
								$emlaksor->execute(array(
									'durum' => $_POST["emlak_durum"],
									'enaz_fiyat' => $_POST["enaz_fiyat"],
									'encok_fiyat' => $_POST["encok_fiyat"]
									));
							}
							elseif (isset($_POST["aranan"])) {
								$aranan=$_POST["aranan"];
								$emlaksor=$db->prepare("SELECT * FROM emlak WHERE emlak_ad LIKE '%$aranan%' ORDER BY emlak_zaman DESC");
								$emlaksor->execute();
							}
							
							while ($emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC)) { extract($emlakcek);  ?>

							<li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
								<div class="listing-item">
									<a href="emlak-<?= seo($emlak_ad).'-'. $emlak_id; ?>" class="text-decoration-none">
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper m-none">
												<img style="width:250; height: 200px;" src="dosyalar/resimler/emlak/<?php echo $emlak_resimyol; ?>" class="img-responsive" alt="">
												<span style="<?php 
												if ($emlak_durum=="KİRALIK") {
													echo 'background:purple !important';
												}elseif ($emlak_durum=="SATILIK") {
													echo 'background:green !important';
												} ?>" class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">
												<?php echo $emlak_durum; ?>
											</span>
										</span>
										<span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
											<?php echo $emlak_fiyat ?> ₺
											<i class="fa fa-caret-right text-color-secondary pull-right"></i>
										</span>
										<span class="custom-thumb-info-title b-normal p-lg">
											<span class="thumb-info-inner text-md"><?php echo $emlak_ad; ?></span>				
										</span>
									</span>
								</a>
							</div>
						</li>
						<?php } ?>						
					</ul>					
				</div>
				<hr class="dashed">
			</div>

			<?php include 'ana-sidebar.php'; ?>			

		</div>
	</div>

	<?php include 'footer.php'; ?>