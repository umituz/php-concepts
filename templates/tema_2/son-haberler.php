<div class="fix single_home_blog_content">
	<div class="fix single_blog_content_container">
		<h2>
			<i class="fa fa-hand-o-down"></i> En Son Bomba Haberler <a href="blog" class="floatright">Hepsini Gör <i class="fa fa-angle-double-right"></i></a>
		</h2>

		<?php 
		$iceriksor=$db->prepare("SELECT * FROM icerik limit 3");
		$iceriksor->execute();
		while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>	

		<div class="fix single_blog_content floatleft">
			<div class="single_blog_content_img">
				<a href=""><img width="100" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>"/></a>
			</div>
			<h2><a href="single-androidnews.html"><?php echo $icerikcek['icerik_ad']; ?></a></h2>
			<p><span style="font-size: 12px" class="floatleft"><i class="fa fa-clock-o"></i> <?php echo $icerikcek['icerik_zaman']; ?></span>
				<span style="font-size: 11px" class="floatright"><i class="fa fa-eye"></i> 2135 Kere Okundu</span></p>
			</div>

			<?php } ?>

		</div>
	</div>