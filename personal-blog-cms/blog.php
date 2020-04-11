<?php
include 'header.php';
$sayfada=BLOG_LIMIT;
$sorgu=$db->prepare("SELECT * FROM icerik");
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
$iceriksor=$db->prepare("SELECT * FROM icerik INNER JOIN kategoriler ON kategori_id = icerik_kategori ORDER BY icerik_id DESC LIMIT $limit,$sayfada");
$iceriksor->execute();
?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Blog (<?php echo $toplam_icerik; ?>)</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { extract($icerikcek); ?>
					<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#"><?php echo $icerik_ad; ?></a></h3>
							</div>
							<img src="yonetim/upload/resim/icerik/<?php echo $icerik_resimyol ?>" alt="" />
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim veniam nihil incidunt nostrum, vero a rem excepturi ipsa adipisci earum cupiditate necessitatibus culpa ut sint corporis porro molestiae aut molestias.</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> <?php echo $icerik_zaman; ?></a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> <?php echo $kategori_ad; ?></a></li>
								<li><i class="icon-comments"></i><a href="#">4 Yorum</a></li>
							</ul>
							<a href="blog-<?=seo($icerik_ad).'-'.$icerik_id; ?>" class="pull-right">Devamını Oku <i class="icon-angle-right"></i></a>
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
					<?php include 'blog_sidebar.php'; ?>
				</div>
			</div>
		</section>

		<?php include 'footer.php'; ?>