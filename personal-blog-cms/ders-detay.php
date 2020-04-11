<?php
include 'header.php';
$derssor=$db->prepare("SELECT * FROM ders INNER JOIN ders_kategori ON derskategori_id = ders_kategori WHERE ders_id=:ders_id");
$derssor->execute(array('ders_id' => $_GET['ders_id']));
$derscek=$derssor->fetch(PDO::FETCH_ASSOC);
extract($derscek);
?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php echo $ders_ad; ?> İçin Detaylar</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">				
				<article>
					<div class="post-image">
						<div class="post-video">
							<div class="post-heading">
								<h3><a href="#"><?php echo $ders_ad; ?></a></h3>
							</div>
							<div class="bottom-article">
								<ul class="meta-post">
									<li><i class="icon-calendar"></i><a href="#"> <?php echo $ders_zaman; ?></a></li>
									<li><i class="icon-user"></i><a href="#"> Admin</a></li>
									<li><i class="icon-folder-open"></i><a href="#"> <?php echo $derskategori_ad; ?></a></li>
									<li><i class="icon-comments"></i><a href="#">4 Yorum</a></li>
								</ul>
							</div>
							<div class="video-container">
								<iframe sandbox="" src="yonetim/upload/video/ders/<?php echo $ders_video; ?>">
								</iframe>
							</div>
						</div>
						
						<div></div>
					</div>
					<div align="justify"><p><?php echo $ders_detay; ?></p></div>

					<hr>

					<div class="row">
						<h3>Toplam Yorum (0)</h3>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<h4>Yorum Yap!</h4>
							<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
								<div id="sendmessage">
									Yorum Yaptığınız İçin Teşekkürler...
								</div>
								<div class="row">
									<div class="col-lg-4 field">
										<input type="text" name="name" placeholder="* Adınızı ve soyadınızı giriniz" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation">
										</div>
									</div>
									<div class="col-lg-4 field">
										<input type="text" name="email" placeholder="* Mail adresinizi giriniz" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation">
										</div>
									</div>
									<div class="col-lg-4 field">
										<input type="text" name="subject" placeholder="Konu nedir?" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation">
										</div>
									</div>
									<div class="col-lg-12 margintop10 field">
										<textarea rows="12" name="message" class="input-block-level" placeholder="* İletmek istediğiniz mesaj..." data-rule="required" data-msg="Please write something"></textarea>
										<div class="validation">
										</div>
										<p>
											<button class="btn btn-theme margintop10 pull-left" type="submit">YORUM YAP</button>
											<span class="pull-right margintop20">* Belirtilen alanları doldurmalısınız!</span>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>

				</article>				
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>