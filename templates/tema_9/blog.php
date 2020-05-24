<?php
include 'header.php';

?>


    <!-- Page Header
    ================================================== -->
    <div id="tf-header">
        <div class="container"> <!-- container -->
            <h1>Blog</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a class="active">Blog</a></li>
            </ol>
        </div><!-- end container -->
    </div>

    <!--  Blog Section
    ================================================== -->
    <div id="tf-blog" class="blog">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2><strong>Blog</strong></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
        </div>

        <div id="blog-post"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->

                <div class="row"> <!-- row -->
                    <div class="col-md-6 col-md-offset-1"> <!-- Left Blogrol col 8 -->

                        <?php

                        $sayfada=5;

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

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                                <div class="media-left"> 
                                    <a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>"> <!-- link to your post single page -->
                                      <img class="media-object" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" width="200" alt="..." > <!-- Your Post Image -->
                                  </a>
                              </div>
                              <div class="media-body">
                                <p class="small"><?php echo $icerikcek['icerik_zaman']; ?></p>
                                <a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>">
                                    <h5 class="media-heading"><strong><?php echo $icerikcek['icerik_ad']; ?></strong></h5>
                                </a>
                                <p><?php echo $icerikcek['icerik_ozet']; ?></p>
                            </div>
                        </div><!-- end post wrap -->

                        <div class="post-meta"> <!-- Meta details -->
                            <ul class="list-inline metas pull-left"> <!-- post metas -->
                                <li><a href="#">Kim Yazdı : Ümit UZ</a></li> <!-- meta author -->
                                <li><a href="#">20 Yorum</a></li> <!-- meta comments -->
                                <li><a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>">Devamını Oku</a></li> <!-- read more link -->
                            </ul>
                            <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                            </ul>
                        </div><!-- end Meta details --> 
                    </div><!-- end Post Wrapper -->

                    <?php } ?>

                    <div class="text-left"> <!-- Blogrol Pagination -->
                        <nav>
                            <ul class="pagination">
                                <?php 

                                $s=0;
                                while($s < $toplam_sayfa)
                                    { $s++;
                                        if ($s==$toplam_sayfa) { ?>

                                        <li class="">
                                            <a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                                        </li>

                                        <?php }
                                        else
                                            { ?> 

                                        <li class="">
                                            <a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                                        </li>

                                        <?php } } ?>  

                                    </ul>
                                </nav>
                            </div>         

                        </div> <!-- end Left content col 8 -->

                        <div class="col-md-4"> <!-- Blog Sidebar -->
                            <div class="sidebar">

                                <div class="widget search"> <!-- Search Widget -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div> <!-- end Search Widget -->

                                <div class="widget categories"> <!-- Category Widget -->
                                    <h4 class="text-uppercase">Category</h4>
                                    <ul class="list-unstyled bullet-lists">
                                        <li><a href="#"><span class="fa fa-circle"></span> Web Design</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> WordPress</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> Graphics Design</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> Branding</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> Marketing</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> Business</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> Outsourcing</a></li>
                                    </ul>
                                </div>

                                <div class="widget archive"> <!-- Archive Widget -->
                                    <h4 class="text-uppercase">Archives</h4>
                                    <ul class="list-unstyled bullet-lists">
                                        <li><a href="#"><span class="fa fa-circle"></span> March 2015</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> February 2015</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> January 2015</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> December 2015</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> November 2015</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> October 2015</a></li>
                                        <li><a href="#"><span class="fa fa-circle"></span> September 2015</a></li>
                                    </ul>
                                </div>

                                <div class="widget post-tab"> <!-- Posts Tab Widget -->
                                    <div role="tabpanel">

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li><!-- Popular Posts -->
                                            <li role="presentation"><a href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Recent</a></li><!-- Recent Posts -->
                                            <li role="presentation"><a href="#comment" aria-controls="comment" role="tab" data-toggle="tab">Comment</a></li><!-- Comments -->
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content"> 
                                            <div role="tabpanel" class="tab-pane active" id="popular"><!-- Popular Posts -->
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">January 27, 2015</p>
                                                        <h5 class="media-heading"><strong>Condimentum aliquam, mollit magna velit nec et scelerisque</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">January 14, 2015</p>
                                                        <h5 class="media-heading"><strong>Pellentesque vehicula. Eget sed, dapibus. Vel et scelerisque donec et</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">Feb 12, 2015</p>
                                                        <h5 class="media-heading"><strong>Et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">January 14, 2015</p>
                                                        <h5 class="media-heading"><strong>Scelerisque vestibulum Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">December 19, 2015</p>
                                                        <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="recent"><!-- Recent Posts -->
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">January 14, 2015</p>
                                                        <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">January 14, 2015</p>
                                                        <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">January 14, 2015</p>
                                                        <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">January 14, 2015</p>
                                                        <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">January 14, 2015</p>
                                                        <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="comment"><!-- Comments -->
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">Ms. Lijoy <strong>Comments</strong> on:</p>
                                                        <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">Coder Expert <strong>Comments</strong> on:</p>
                                                        <h5 class="media-heading"><strong>Pellentesque vehicula. Eget sed, dapibus. Vel et scelerisque donec et</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">Cool Design <strong>Comments</strong> on:</p>
                                                        <h5 class="media-heading"><strong>Et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">Mark Szuckerburg <strong>Comments</strong> on:</p>
                                                        <h5 class="media-heading"><strong>Scelerisque vestibulum Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <p class="small">Ruji <strong>Comments</strong> on:</p>
                                                        <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="widget tags"> <!-- Tags Widget -->
                                    <h4 class="text-uppercase">Tags</h4>
                                    <ul class="list-inline bullet-lists">
                                        <li><a href="#">web design</a></li>
                                        <li><a href="#">business</a></li>
                                        <li><a href="#">psd design</a></li>
                                        <li><a href="#">themeforest</a></li>
                                        <li><a href="#">wordpress</a></li>
                                        <li><a href="#">responsive</a></li>
                                        <li><a href="#">bootstrap</a></li>
                                    </ul>
                                </div>


                            </div>
                        </div><!-- end right content col 4 -->

                    </div>

                </div><!-- end container -->
            </div> <!-- end fullwidth gray background -->
        </div>

        <?php include 'footer.php'; ?>