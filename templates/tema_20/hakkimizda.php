<?php 
include 'header.php';
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda");
$hakkimizdasor->execute();
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>

<div id="body">
	<h1><span><?php echo $hakkimizdacek['hakkimizda_ad']; ?></span></h1>
	<div>
		<img style="width: 600px; height: 500px;" src="resimler/<?php echo $hakkimizdacek['hakkimizda_resimyol'] ?>" alt="">
		<div class="article">
			<p><?php echo $hakkimizdacek['hakkimizda_detay']; ?></p>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>