<?php include 'header.php'; ?>

<div id="body">
	<div>
		<h1>Blog</h1>
		<ul>
			<?php 

			$sayfada=5;

			$sorgu=$db->prepare("SELECT * FROM icerik");
			$sorgu->execute();
			$toplam_icerik=$sorgu->rowCount();

			$toplam_sayfa=ceil($toplam_icerik / $sayfada);

			$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

			if($sayfa<1) $sayfa=1;
			if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;

			$limit=($sayfa-1)*$sayfada;

			$iceriksor=$db->prepare("SELECT * FROM icerik INNER JOIN kategoriler ON kategori_id=icerik_kategori_id order by icerik_id DESC LIMIT $limit,$sayfada");
			$iceriksor->execute();

			while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)){?>

			<li>
				<img style="width: 200px;" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt="">
				<div>
					<h1><?php echo $icerikcek['icerik_ad']; ?></h1>
					<p><?php echo $icerikcek['icerik_ozet']; ?></p>
					<a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>" class="more">Devamını Oku</a>
				</div>
			</li>

			<?php } ?>		
		</ul>
		<ul>
			<?php 

			$s=0;
			while($s < $toplam_sayfa)
				{ $s++;
					if ($s==$toplam_sayfa) { ?>

					<li style="float:left; color: white;" class="">
						<a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
					</li>

					<?php }
					else
						{ ?> 

					<li style="float:left; color: white;" class="">
						<a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
					</li>

					<?php } } ?> 
				</ul><!--/.pagination-->
			</div>
		</div>

		<?php include 'footer.php'; ?>