<?php
include 'header.php';
$sayfasor=$db->prepare("SELECT * FROM sayfalar WHERE sayfa_id=:sayfa_id");
$sayfasor->execute(array('sayfa_id' => $_GET['sayfa_id']));
$sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC);
extract($sayfacek);
?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php echo $sayfa_ad; ?></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">				
				<article>
					<div class="post-image">
						<div class="post-heading">
							<h3><a href="#"><?php echo $sayfa_ad; ?></a></h3>
						</div>
						<div><img src="yonetim/upload/resim/sayfa/<?php echo $sayfa_resimyol ?>" alt="<?php echo $sayfa_ad; ?>" /></div>
					</div>
					<div align="justify"><p><?php echo $sayfa_detay; ?></p></div>

				</article>				
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>