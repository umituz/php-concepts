<?php
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
	'icerik_id' => $_GET['icerik_id']
	));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>

<div id="body" class="blogsinglepost">
	<div>
		<h1>Blog single post</h1>
		<img style="width: 200px;" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt="">
		<div>
			<h1><?php echo $icerikcek['icerik_ad']; ?></h1>
			<p><?php echo $icerikcek['icerik_ozet']; ?></p>
			<p><?php echo $icerikcek['icerik_detay']; ?></p>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>