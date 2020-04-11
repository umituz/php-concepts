<?php 
$derskategorisor=$db->prepare("SELECT * FROM ders_kategori");
$derskategorisor->execute();
$derskategorisay=$derskategorisor->rowCount();
?>
<div class="col-lg-4">
	<aside class="right-sidebar">
		<div class="widget">
			<form class="form-search">
				<input class="form-control" type="text" placeholder="Ara..">
			</form>
		</div>
		<div class="widget">
			<h5 class="widgetheading">Kategoriler(<?php echo $derskategorisay; ?>)</h5>
			<ul class="cat">
				<?php while ($derskategoricek=$derskategorisor->fetch(PDO::FETCH_ASSOC)) { extract($derskategoricek);  ?>	
					<li><i class="icon-angle-right"></i><a href=""><?php echo $derskategori_ad; ?></a><span></span></li>
					<?php } ?>
				</ul>
			</div>
			<div class="widget">
				<h5 class="widgetheading">En Çok İzlenenler</h5>
				<ul class="recent">
					<?php 
					$derssor2=$db->prepare("SELECT * FROM ders INNER JOIN ders_kategori ON derskategori_id = ders_kategori ORDER BY ders_hit DESC LIMIT 3");
					$derssor2->execute();
					while ($derscek2=$derssor2->fetch(PDO::FETCH_ASSOC)) { extract($derscek2); ?>
					<li>
						<iframe  sandbox="" src="yonetim/upload/video/ders/<?php echo $ders_video; ?>">
						</iframe>
						<h6><a href="#">Lorem ipsum dolor sit</a></h6>
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
				</ul>
			</div>
		</aside>
	</div>