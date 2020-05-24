<div class="fix main_content_area">
	<div class="fix centre main_content">
		<div class="fix home_content floatleft">
			<div class="fix single_home_content">
				<div class="fix single_home_content_container">
					<h2><i class="fa fa-angle-double-down"></i> En Son Yüklenenler </h2>

					<?php

					$sayfada=24;

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

					while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>

					<div class="fix single_content floatleft">
						<img  src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" />
						<h2><?php echo $icerikcek['icerik_ad']; ?></h2>
						<div class="rating">
							<ul>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
						<div class="home_download">
							<a href="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>">İncele</a>
						</div>
					</div>

					<?php } ?>

				</div>
				<div class="pagination" style="float:left">
					<ul>
						<?php 

						$s=0;
						while($s < $toplam_sayfa)
							{ $s++;
								if ($s==$toplam_sayfa) { ?>

								<li class="">
									<a href="icerik?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
								</li>

								<?php }
								else
									{ ?> 

								<li class="">
									<a href="icerik?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
								</li>

								<?php } } ?>  

							</ul>
						</div>
					</div>

					<?php include 'son-haberler.php'; ?>
					
				</div> <!-- End home content-->
				
				<?php include 'sidebar.php'; ?>

			</div>
</div> <!-- End main content-->