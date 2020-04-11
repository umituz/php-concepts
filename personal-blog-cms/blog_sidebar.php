<?php
$kategorisor=$db->prepare("SELECT * FROM kategoriler");
$kategorisor->execute();
$kategorisay=$kategorisor->rowCount();
?>
<div class="col-lg-4">
	<aside class="right-sidebar">
		<div class="widget">
			<form class="form-search">
				<input class="form-control" type="text" placeholder="Ara..">
			</form>
		</div>
		<div class="widget">
			<h5 class="widgetheading">Kategoriler (<?php echo $kategorisay; ?>)</h5>
			<ul class="cat">
				<?php while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { extract($kategoricek); ?>
					<li><i class="icon-angle-right"></i><a href="kategori-<?=seo($kategori_ad).'-'.$kategori_id; ?>"><?php echo $kategori_ad; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="widget">
				<h5 class="widgetheading">En Çok Okunanlar</h5>
				<ul class="recent">
					<?php 
					$iceriksor=$db->prepare("SELECT * FROM icerik ORDER BY icerik_hit DESC LIMIT 3");
					$iceriksor->execute();
					while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { extract($icerikcek); ?>
					<li>
						<img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
						<h6><a href="#"><?php echo $icerik_ad; ?></a></h6>
						<p>
							Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="widget">
				<h5 class="widgetheading">Etiket Bulutu</h5>
				<ul class="tags">
					<li><a href="#">Web design</a></li>
					<li><a href="#">Trends</a></li>
					<li><a href="#">Technology</a></li>
					<li><a href="#">Internet</a></li>
					<li><a href="#">Tutorial</a></li>
					<li><a href="#">Development</a></li>
					<li><a href="#">Technology</a></li>
					<li><a href="#">Internet</a></li>
					<li><a href="#">Tutorial</a></li>
					<li><a href="#">Development</a></li>
				</ul>
			</div>
		</aside>
	</div>