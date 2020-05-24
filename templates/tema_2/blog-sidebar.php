			<div class="fix blog_home_content_sidebar floatright">
				
				<div class="home_single_sidebar">
					<h2><i class="fa fa-bars"></i> Kategoriler</h2>

					<div class="home_sidebar_apps">
						<select>
							<option selected="selected"><a>Bir Kategori Seç</a></option>
							<option><a>Spor</a></option>
							<option><a>Sanat</a></option>
							<option><a>Bilişim</a></option>
							<option><a>Elektrik</a></option>
							<option><a>Teknoloji</a></option>
						</select>
					</div>

				</div>
				
				
				<div class="home_single_sidebar">
					<h2><i class="fa fa-bars"></i> Reklam Alanı</h2>

					<?php 
					$reklamsor=$db->prepare("SELECT * FROM reklamlar");
					$reklamsor->execute();
					while ($reklamcek=$reklamsor->fetch(PDO::FETCH_ASSOC)) { ?>						

					<div class="home_sidebar_apps">
						<a href=""><img src="resimler/reklamlar/<?php echo $reklamcek['reklam_resimyol']; ?>" width="120" height="120" alt=""/></a>
						<h3><a href=""><?php echo $reklamcek['reklam_ad']; ?></a></h3>
					</div>	

					<?php } ?>			

				</div>

				<div class="home_single_sidebar">
					<h2><i class="fa fa-bars"></i> Son Yayınlananlar</h2>

					<?php 
					$iceriksor=$db->prepare("SELECT * FROM icerik limit 15");
					$iceriksor->execute();
					while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>	
					<div class="fix home_sidebar_top_apps">
						<a href=""><img width="100" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt=""/></a>
						<h3><a href=""><?php echo $icerikcek['icerik_ad']; ?></a></h3>
						<p><i class="fa fa-clock-o"></i> Arl 23,2014</p>
						<p><i class="fa fa-comments"></i> 8 Comments</p>
					</div>
					<?php } ?>
				</div>	



			</div> <!-- End home sidebar-->