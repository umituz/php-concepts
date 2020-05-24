<?php 
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
	'icerik_id' => $_GET['icerik_id']
	));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>

<div id="body">
	<h1><span><?php echo $icerikcek['icerik_ad']; ?></span></h1>
	<div>
		<img style="width: 800px; height: 400px;" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt="">
		<div class="article">
			<h4><?php echo $icerikcek['icerik_ozet']; ?></h4>
			<p><?php echo $icerikcek['icerik_detay']; ?></p>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>