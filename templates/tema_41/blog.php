<?php include 'header.php'; ?>
<div class="container">
	<!--PAGE TITLE-->
	<div class="row">
		<div class="span12">
			<div class="page-header">
				<h1>
					Blog
				</h1>
			</div>
		</div>
	</div>
	<!-- /. PAGE TITLE-->
	<div class="row">
		<div class="span9">
			<!--Blog Post-->

			<?php 

			$sayfada=2;

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

			<div class="blog-post">
				<h2><?php echo $icerikcek['icerik_ad']; ?></h2>
				<div class="postmetadata">
					<ul>
						<li>
							<i class="icon-user"></i> <a href="#">sa</a>
						</li>
						<li>
							<i class="icon-calendar"></i><?php echo $icerikcek['icerik_zaman']; ?>
						</li>
						<li>
							<i class="icon-comment"></i> <a href="#">100 Yorum</a>
						</li>
						<li>
							<i class="icon-tags"></i> <a href="#">dsa</a>, <a href="#">dsa</a>
						</li>
					</ul>
				</div>
				<img src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>">
				<p><?php echo $icerikcek['icerik_ozet']; ?></p>	

				<a class="btn btn-primary" href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>">Devamını Oku</a>			
			</div>

			<?php } ?>

			<!--Pagination-->
			<div class="pagination">
				<ul>
					<?php 

					$s=0;
					while($s < $toplam_sayfa)
						{ $s++;
							if ($s==$toplam_sayfa) { ?>

							<li class="">
							<a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
							</li>

							<?php }
							else
								{ ?> 

							<li class="">
								<a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
							</li>

							<?php } } ?>  
						</ul>
					</div>	

					<!--/.Pagination-->
				</div>	



				<div class="span3">
					<div class="side-bar">

						<h3>Categories</h3>
						<ul class="nav nav-list">
							<li><a href="#">Web Design</a></li>
							<li><a href="#">Typography</a></li>
							<li><a href="#">Inspiration</a></li>
							<li><a href="#">Business</a></li>
						</ul>

					</div>


					<div class="side-bar">
						<h3>Tags</h3>

						<a href="#">cras</a>,
						<a href="#">sit</a>,
						<a href="#">amet</a>,
						<a href="#">nibh</a>,
						<a href="#">libero</a>,
						<a href="#">gravida</a>,
						<a href="#">nulla</a>
					</div>


					<div class="side-bar">
						<h3>Recent Post</h3>

						<ul class="recent-post">
							<li><a href=""><strong>The standard chunk of Lorem Ipsum used since </strong></a>
								<small><i class="icon-user"></i> <a href="#">Author Name</a>,  <i class="icon-calendar"></i>Jul 20th, 2013</small>
							</li>				

							<li><a href=""><strong>The standard chunk of Lorem Ipsum used since </strong></a>
								<small><i class="icon-user"></i> <a href="#">Author Name</a>,  <i class="icon-calendar"></i>Jul 20th, 2013</small>
							</li>

							<li><a href=""><strong>The standard chunk of Lorem Ipsum used since </strong></a>
								<small><i class="icon-user"></i> <a href="#">Author Name</a>,  <i class="icon-calendar"></i>Jul 20th, 2013</small>
							</li>


						</ul>






					</div>


				</div>


				<!--==================-->
			</div>
		</div>

		<?php include 'footer.php'; ?>