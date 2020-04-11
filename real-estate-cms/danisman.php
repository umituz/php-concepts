<?php
include 'header.php';
?>

<div role="main" class="main">

	<section class="page-header page-header-light page-header-more-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Agents</h1>
					<ul class="breadcrumb breadcrumb-valign-mid">
						<li><a href="demo-real-estate.html">Home</a></li>
						<li><a href="#">About</a></li>
						<li class="active">Agents</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<?php
		$sayfada=1;
		$sorgu=$db->prepare("SELECT * FROM yonetmen");
		$sorgu->execute();
		$toplam_icerik=$sorgu->rowCount();
		$toplam_sayfa=ceil($toplam_icerik / $sayfada);
		$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
		if($sayfa<1) $sayfa=1;
		if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;
		$limit=($sayfa-1)*$sayfada;					
		$yonetmensor=$db->prepare("SELECT * FROM yonetmen ORDER BY yonetmen_id DESC LIMIT $limit,$sayfada");
		$yonetmensor->execute();
		$say=$yonetmensor->rowCount();
		while ($yonetmencek=$yonetmensor->fetch(PDO::FETCH_ASSOC)) { extract($yonetmencek);
			if ($yonetmen_durum==1) { ?>
			<div class="agent-item">
				<div class="row">
					<div class="col-md-2">
						<img style="width: 200px; height: 150px;" src="yonetim/dosyalar/resimler/yonetmen/<?php echo $yonetmen_resimyol; ?>" class="img-responsive" alt="">
					</div>
					<div class="col-md-6">
						<h3 class="mt-xs mb-xs"><?php echo $yonetmen_adsoyad; ?></h3>
						<h6 class="mb-xs">SATIŞ DANIŞMANI</h6>
						<p><?php echo substr($yonetmen_detay,0,150); ?></p>
						<a class="btn btn-secondary btn-sm mt-md" href="danisman-<?= seo($yonetmen_adsoyad).'-'.$yonetmen_id; ?>">Profilini Gör</a>
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
									<i class="icon-call-out icons"></i> <?php echo $yonetmen_tel; ?>
								</a>
							</li>							
						</ul>
					</div>
				</div>
			</div>
			<?php } } ?>
			<div class="row mt-lg mb-xlg">
				<div class="col-md-12 center">
					<ul class="pagination">
						<?php 
						$s=0;
						while($s < $toplam_sayfa)
							{ $s++;
								if ($s==$sayfa) { ?>

								<li class="active">
									<a href="danisman?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
								</li>

								<?php }
								else
									{ ?> 

								<li>
									<a href="danisman?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
								</li>

								<?php } } 


								?>  

							</ul>
						</div>
					</div>
				</div>

				<?php include 'footer.php'; ?>