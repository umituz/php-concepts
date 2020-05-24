<?php include 'header.php'; ?>


<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Blog</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Anasayfa</a> <span class="divider">/</span></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->         

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span8">
            <div class="blog">

                <?php

                $sayfada=3;

                $sorgu=$db->prepare("SELECT * FROM icerik");
                $sorgu->execute();
                $toplam_icerik=$sorgu->rowCount();

                $toplam_sayfa=ceil($toplam_icerik / $sayfada);

                $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

                if($sayfa<1) $sayfa=1;
                if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;

                $limit=($sayfa-1)*$sayfada;

                $iceriksor=$db->prepare("SELECT * FROM icerik order by icerik_id DESC LIMIT $limit,$sayfada");
                $iceriksor->execute();

                while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>

                <div class="blog-item well">
                    <a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>"><h2><?php echo $icerikcek['icerik_ad']; ?></h2></a>
                    <div class="blog-meta clearfix">
                        <p class="pull-left">
                          <i class="icon-user"></i> by <a href="#"><?php echo $ayarcek['ayar_author']; ?></a> | <i class="icon-folder-close"></i> Kategori <a href="#">ZartZurt</a> | <i class="icon-calendar"></i> <?php echo $icerikcek['icerik_zaman']; ?>
                      </p>
                      <p class="pull-right"><i class="icon-comment pull"></i> <a href="blog-item.html#comments">3 Yorum</a></p>
                  </div>
                  <p><img src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" width="100%" alt="" /></p>
                  <p><?php echo $icerikcek['icerik_ozet']; ?></p>
                  <a class="btn btn-link" href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>">Devamını Oku <i class="icon-angle-right"></i></a>
              </div>
              <!-- End Blog Item -->
              <?php } ?>

              <div class="gap"></div>

              <!-- Paginationa -->
              <div class="pagination">
                <ul>
                    <?php 

                    $s=0;
                    while($s < $toplam_sayfa)
                       { $s++;
                        if ($s==$toplam_sayfa) { ?>

                        <li class="active">
                         <a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                     </li>

                     <?php }
                     else
                         { ?> 

                     <li class="active">
                         <a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                     </li>

                     <?php } } ?>  
                 </ul>
               </div>


           </div>
       </div>
       <aside class="span4">
        <div class="widget search">
            <form>
                <input type="text" class="input-block-level" placeholder="Search">
            </form>
        </div>
        <!-- /.search -->

        <div class="widget ads">
            <div class="row-fluid">
                <div class="span6">
                    <a href="#"><img src="images/ads/ad1.png" alt=""></a>
                </div>

                <div class="span6">
                    <a href="#"><img src="images/ads/ad2.png" alt=""></a>
                </div>
            </div>
            <p> </p>
            <div class="row-fluid">
                <div class="span6">
                    <a href="#"><img src="images/ads/ad3.png" alt=""></a>
                </div>

                <div class="span6">
                    <a href="#"><img src="images/ads/ad4.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- /.ads -->

        <div class="widget widget-popular">
            <h3>Popular Posts</h3>
            <div class="widget-blog-items">
                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

            </div>                        
        </div>
        <!-- End Popular Posts -->        

        <div class="widget">
            <h3>Blog Categories</h3>
            <div>
                <div class="row-fluid">
                    <div class="span6">
                        <ul class="unstyled">
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Updates</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>

                    <div class="span6">
                        <ul class="unstyled">
                            <li><a href="#">Joomla</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Drupal</a></li>
                            <li><a href="#">Magento</a></li>
                            <li><a href="#">Bootstrap</a></li>
                        </ul>
                    </div>
                </div>

            </div>                       
        </div>
        <!-- End Category Widget -->

        <div class="widget">
            <h3>Tag Cloud</h3>
            <ul class="tag-cloud unstyled">
                <li><a class="btn btn-mini btn-primary" href="#">CSS3</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">HTML5</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">WordPress</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Joomla</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Drupal</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Bootstrap</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">jQuery</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Tutorial</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Update</a></li>
            </ul>
        </div> 
        <!-- End Tag Cloud Widget -->

        <div class="widget">
            <h3>Archive</h3>
            <ul class="archive arrow">
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
                <li><a href="#">March 2013</a></li>
                <li><a href="#">February 2013</a></li>
            </ul>
        </div> 
        <!-- End Archive Widget -->   

    </aside>
</div>

</section>

<?php include 'alt-bolum.php'; include 'footer.php'; ?>