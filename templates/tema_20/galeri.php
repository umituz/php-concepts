<?php 
include 'header.php';
?>

<div id="body">
	<h1><span>gallery</span></h1>
	<ul class="gallery">
		<?php 
		$iceriksor=$db->prepare("SELECT * FROM icerik order by icerik_id desc");
		$iceriksor->execute();
		while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>

		<li>
			<a href="galeri-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>">
				<img style="width: 300px; height: 200px;" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt="">
			</a>
		</li>	
		<?php } ?>

	</ul>
</div>

<?php include 'footer.php'; ?>
