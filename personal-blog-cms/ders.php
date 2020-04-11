<?php
include 'header.php';
$sayfada=DERS_LIMIT;
$sorgu=$db->prepare("SELECT * FROM ders");
$sorgu->execute();
$toplam_icerik=$sorgu->rowCount();
$toplam_sayfa=ceil($toplam_icerik / $sayfada);
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
if($sayfa<1) $sayfa=1;
if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;
$limit=($sayfa-1)*$sayfada; 
$oncekiSayfa = $sayfa > 1 ? $sayfa - 1 : 1;      
$oncekiLink = $_SERVER['PHP_SELF']."?sayfa=".$oncekiSayfa;
$sonrakiSayfa = $sayfa < $toplam_sayfa ? $sayfa + 1 : $toplam_sayfa;      
$sonrakiLink = $_SERVER['PHP_SELF']."?sayfa=".$sonrakiSayfa;
$derssor=$db->prepare("SELECT * FROM ders INNER JOIN ders_kategori ON derskategori_id = ders_kategori ORDER BY ders_id DESC LIMIT $limit,$sayfada");
$derssor->execute();
?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Ders (<?php echo $toplam_icerik; ?>)</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">		
				<?php while ($derscek=$derssor->fetch(PDO::FETCH_ASSOC)) { extract($derscek); ?>	
					<article>
						<div class="post-video">
							<div class="post-heading">
								<h3><a href="#"><?php echo $ders_ad; ?></a></h3>
							</div>
							<div class="video-container">
								<iframe sandbox="" src="yonetim/upload/video/ders/<?php echo $ders_video; ?>">
								</iframe>
							</div>
						</div>
						<p>
							Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei.
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"><?php echo $ders_zaman; ?></a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"><?php echo $derskategori_ad; ?></a></li>
								<li><i class="icon-comments"></i><a href="#">4 Yorum</a></li>
							</ul>
							<a href="ders-<?=seo($ders_ad).'-'.$ders_id ?>" class="pull-right">Devamını Oku <i class="icon-angle-right"></i></a>
						</div>
					</article>								
					<?php } ?>
					<div class="col-lg-12" align="center">
						<ul class="pagination">    
							<li><a href="<?php echo $oncekiLink; ?>">&lsaquo; Önceki</a></li> 
							<?php 
							$s=0;     
							while($s < $toplam_sayfa){ $s++;
								if ($s==$sayfa) { ?>
								<li class="active">
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
								</li>
								<?php }	else { ?> 
								<li>
									<a href="<?php echo $_SERVER['PHP_SELF']; ?>?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
								</li>
								<?php } } ?> 										        
								<li><a href="<?php echo $sonrakiLink; ?>">Sonraki &rsaquo;</a></li>
							</ul>
						</div>
					</div>
					<?php include 'ders_sidebar.php'; ?>
				</div>
			</div>
		</section>

		<?php include 'footer.php'; ?>