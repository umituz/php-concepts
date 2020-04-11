<?php
include 'header.php';
?>

<div role="main" class="main">	
	<div class="container">
		<div class="row mb-lg">
			<ul class="properties-listing sort-destination p-none">
				<?php
				$sayfada=9;
				$sorgu=$db->prepare("SELECT * FROM emlak");
				$sorgu->execute();
				$toplam_icerik=$sorgu->rowCount();
				$toplam_sayfa=ceil($toplam_icerik / $sayfada);
				$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
				if($sayfa<1) $sayfa=1;
				if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;
				$limit=($sayfa-1)*$sayfada;					
				$emlaksor=$db->prepare("SELECT * FROM emlak ORDER BY emlak_zaman DESC LIMIT $limit,$sayfada");
				$emlaksor->execute();
				$say=$emlaksor->rowCount();
				while ($emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC)) { extract($emlakcek); $emlak_id; ?>
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

	<div class="row mt-lg mb-xlg">
		<div class="col-md-12 center">
			<ul class="pagination">
				<?php 
				$s=0;
				while($s < $toplam_sayfa)
					{ $s++;
						if ($s==$sayfa) { ?>

						<li class="active">
							<a href="emlak?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
						</li>

						<?php }
						else
							{ ?> 

						<li>
							<a href="emlak?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
						</li>

						<?php } } 


						?>  

					</ul>
				</div>
			</div>

		</div>

		<?php include 'footer.php'; ?>