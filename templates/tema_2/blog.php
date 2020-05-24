<?php
include 'header.php';
include 'menu.php';

?>

<div class="fix main_content_area">
	<div class="fix centre main_content">
		<div class="fix blog_home_content floatleft">
				<!--
					<div class="fix home_wide_add_area">
						<div class="fix home_wide_add">
							<img src="images/728x90.gif"/>
						</div>
					</div>
				-->
				<h2><i class="fa fa-angle-double-down"></i> Son Yüklenenler</h2>

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

				while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>


				<div class="fix single_home_content">
					<div class="android_news_content fix">

						<div class="fix single_android_news">
							<h1><a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>"><?php echo $icerikcek['icerik_ad']; ?></a></h1>
							<div class="android_post_meta fix">
								<p class="floatleft"><i class="fa fa-clock-o"></i> Apr 27, 2014 &nbsp;&nbsp;&nbsp; <i class="fa fa-user-md"></i> By admin &nbsp;&nbsp;&nbsp; <i class="fa fa-tags"></i> Tags: games,play</p>
								<div class="floatright" style="margin-left:15px;margin-top:10px;">

									<!--facebook-->
									<div class="floatleft">
										<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
									</div>

									<!--twiter-->
									<div class="floatleft">
										<a href="https://twitter.com/share" class="twitter-share-button" data-via="apktuts" data-related="apktuts">Tweet</a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
									</div>

									<!--Google-->
									<div class="floatleft">
										<!-- Place this tag where you want the +1 button to render. -->
										<div class="g-plusone" data-size="medium"></div>

										<!-- Place this tag after the last +1 button tag. -->
										<script type="text/javascript">
											(function() {
												var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
												po.src = 'https://apis.google.com/js/platform.js';
												var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
											})();
										</script>
									</div>

									<!-- LinkedIn -->
									<div class="floatleft">
										<script src="//platform.linkedin.com/in.js" type="text/javascript">
											lang: en_US
										</script>
										<script type="IN/Share" data-url="techtunes.com.bd" data-counter="right"></script>
									</div>


									<!-- stumbleupon-->
									<div class="floatleft">
										<!-- Place this tag where you want the su badge to render -->
										<su:badge layout="1"></su:badge>

										<!-- Place this snippet wherever appropriate -->
										<script type="text/javascript">
											(function() {
												var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
												li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
												var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
											})();
										</script>

									</div>
								</div>
							</div>
							<div class="fix android_excerpt_content">
								<img width="300" height="50" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt=""/>
								<p><?php echo $icerikcek['icerik_ozet']; ?></p>
								<a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>">Devamını Oku <i class="fa fa-long-arrow-right"></i></a>
							</div>

						</div>

					</div>
				</div>

				<?php } ?>

				<nav style="float: left;">

					<ul class="pagination">
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

						</nav>

					<!--
					<div class="fix home_wide_add_area">
						<div class="fix home_wide_add">
							<img src="images/728x90.gif"/>
						</div>
					</div>
				-->
			</div> <!-- End home content-->

			<?php include 'blog-sidebar.php'; ?>


		</div>
	</div> <!-- End main content-->

	<?php include 'aciklama.php'; include 'alt-menu.php'; include 'footer.php'; ?>