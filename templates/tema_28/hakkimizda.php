<?php
include 'header.php';
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda");
$hakkimizdasor->execute();
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>

<div id="aboutwrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
			</div>
		</div>
	</div> <!-- /container -->
</div>

<div class="container">
	<div class="row centered mt mb">
		<div class="col-lg-8 col-lg-offset-2">
			<h2><?php echo $hakkimizdacek['hakkimizda_ad']; ?></h2>
			<p><?php echo $hakkimizdacek['hakkimizda_detay']; ?></p>
		</div>

	</div>
</div>



<?php include 'footer.php'; ?>