<?php include 'header.php'; ?>

<div id="body">
	<h1><span>Blog</span></h1>
	<div>
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

			$iceriksor=$db->prepare("SELECT * FROM icerik order by icerik_id DESC LIMIT $limit,$sayfada");
			$iceriksor->execute();

			while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>

			<li>
				<a href="blog-single-post.html" class="figure">
					<img style="width:380px; height: 280px;" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt="">
				</a>
				<div>
					<h3><?php echo $icerikcek['icerik_ad'] ?></h3>
					<p><?php echo $icerikcek['icerik_ozet']; ?></p>
					<a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>" class="more">Devamını Oku</a>
				</div>
			</li>

			<?php } ?>

		</ul>
	</div>
	<ul>
		<?php 

		$s=0;
		while($s < $toplam_sayfa)
			{ $s++;
				if ($s==$toplam_sayfa) { ?>

				<li class="active">
					<a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
				</li>

				<?php }
				else
					{ ?> 

				<li class="active">
					<a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
				</li>

				<?php } } ?>  
			</ul>
		</div>

		<?php include 'footer.php'; ?>