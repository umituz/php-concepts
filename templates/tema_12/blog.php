<?php include 'header.php'; ?>

<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Blog</h1>
                <p>Bu bir blogtur</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->     

<section id="blog" class="container">
    <div class="row">
        <?php include 'sidebar.php'; ?>      
        <div class="col-sm-8 col-sm-pull-4">
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
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" width="100%" alt="" />
                    <div class="blog-content">
                        <a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>"><h3><?php echo $icerikcek['icerik_ad']; ?></h3></a>
                        <div class="entry-meta">
                            <span><i class="icon-user"></i> <a href="#">Allah'a emanet</a></span>
                            <span><i class="icon-folder-close"></i> <a href="#">Ümit UZ </a></span>
                            <span><i class="icon-calendar"></i> <?php echo $icerikcek['icerik_zaman']; ?></span>
                            <span><i class="icon-comment"></i> <a href="#">3 Yorum</a></span>
                        </div>
                        <p><?php echo $icerikcek['icerik_ozet']; ?></p>
                        <a class="btn btn-default" href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>">Devamını Oku <i class="icon-angle-right"></i></a>
                    </div>
                </div><!--/.blog-item-->
                <?php } ?>


                <ul class="pagination pagination-lg">
                    <?php 

                    $s=0;
                    while($s < $toplam_sayfa)
                       { $s++;
                        if ($s==$toplam_sayfa) { ?>

                        <li class="active">
                           <a style="color:white" href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                       </li>

                       <?php }
                       else
                         { ?> 

                     <li class="active">
                         <a style="color:white" href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                     </li>

                     <?php } } ?>  
                 </ul><!--/.pagination-->
             </div>
         </div><!--/.col-md-8-->
     </div><!--/.row-->
 </section><!--/#blog-->

 <section id="bottom" class="wet-asphalt">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4>About Us</h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                <p>Pellentesque habitant morbi tristique senectus.</p>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <h4>Company</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">The Company</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Conatct Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Copyright</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <h4>Latest Blog</h4>
                <div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/blog/thumb1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 17 Aug 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/blog/thumb2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 13 Sep 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/blog/thumb3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 11 Jul 2013</small>
                        </div>
                    </div>
                </div>  
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <h4>Address</h4>
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
                <h4>Newsletter</h4>
                <form role="form">
                    <div class="input-group">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="button">Go!</button>
                        </span>
                    </div>
                </form>
            </div> <!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->

<?php include 'footer.php'; ?>