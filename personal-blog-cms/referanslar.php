<?php 
include 'header.php'; 
$sayfada=REFERANS_LIMIT;
$sorgu=$db->prepare("SELECT * FROM referans");
$sorgu->execute();
$toplam_icerik=$sorgu->rowCount();
$toplam_sayfa=ceil($toplam_icerik / $sayfada);
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
if($sayfa<1) $sayfa=1;
if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;
$limit=($sayfa-1)*$sayfada; 
$oncekiSayfa = $sayfa > 1 ? $sayfa - 1 : 1;      
$oncekiLink = $_SERVER['PHP_SELF']."?sayfa=".$oncekiSayfa;
$sonrakiSayfa = $sayfa < $toplam_sayfa ? $sayfa + 1 : $toplam_sayfa;      
$sonrakiLink = $_SERVER['PHP_SELF']."?sayfa=".$sonrakiSayfa;
$referanssor=$db->prepare("SELECT * FROM referans ORDER BY referans_id DESC LIMIT $limit,$sayfada");
$referanssor->execute();
$referanssay=$referanssor->rowCount($uyesor);
?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Referanslar (<?php echo $toplam_icerik; ?>)</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Freelance Referanslarım</h4>
				<div class="row">
					<section id="projects">
						<ul id="thumbs" class="portfolio">
							<!-- Item Project and Filter Name -->
							<?php 							
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
								<div class="item-thumbs"><a href="referans-<?=seo($referans_ad).'-'.$referans_id; ?>"><i class="fa fa-eye"></i> Detayları Gör</a></div>

							</li>
							<?php } ?>
							<!-- End Item Project -->							
						</ul>						
					</section>
					<div class="col-lg-12" align="center">
						<ul class="pagination">    
							<li><a href="<?php echo $oncekiLink; ?>">&lsaquo; Önceki</a></li> 
							<?php 
							$s=0;     
							while($s < $toplam_sayfa){ $s++;
								if ($s==$sayfa) { ?>
								<li class="active">
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
								</li>
								<?php }	else { ?> 
								<li>
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
								</li>
								<?php } } ?> 										        
								<li><a href="<?php echo $sonrakiLink; ?>">Sonraki &rsaquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>