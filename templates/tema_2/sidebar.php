				<div class="fix home_content_sidebar floatright">

					<div class="home_single_sidebar">
						<h2><i class="fa fa-bars"></i> Kategoriler</h2>

						<div class="home_sidebar_apps">
							<select>
								<option selected="selected"><a>Bir Kategori Seç</a></option>
								<option><a>Atın ölümü arpadan olur kategorisi</a></option>
								<option><a>Merak, ilmin hocasıdır.</a></option>
								<option><a>Durma derler bi yerde ama sonra niyeyse başka oluyo hep</a></option>
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
							<a href=""><img src="resimler/reklamlar/<?php echo $reklamcek['reklam_resimyol']; ?>" alt=""/></a>
							<h3><a href=""><?php echo $reklamcek['reklam_ad']; ?></a></h3>
						</div>

						<?php } ?>				

					</div>

					<div class="home_single_sidebar">
						<h2><i class="fa fa-bars"></i> İçerikler</h2>

						<?php 
						$iceriksor=$db->prepare("SELECT * FROM icerik limit 7");
						$iceriksor->execute();
						while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>	

						<div class="fix home_sidebar_top_apps">
							<a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>"><img width="70" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt=""/></a>
							<h3><a href=""><?php echo $icerikcek['icerik_ad']; ?></a></h3>
							<p><a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>"> Devamını Oku</a></p>
						</div>

						<?php } ?>

					</div>



				</div> <!-- End home sidebar-->