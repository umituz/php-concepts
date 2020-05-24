    <!--  Blog Section
    ================================================== -->
    <div id="tf-blog">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Son Eklenen <span class="highlight"><strong>Haberler</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
        </div>

        <div id="blog-post" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->

                <div class="row"> <!-- row -->

                <div class="col-md-12"> <!-- Left content col 6 -->

                        <?php 
                        $iceriksor=$db->prepare("SELECT * FROM icerik order by icerik_id desc limit 5 ");
                        $iceriksor->execute();
                        while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                              <div class="media-left"> 
                                <a href="#"> <!-- link to your post single page -->
                                  <img class="media-object" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt="<?php echo $icerikcek['icerik_ad']; ?>" width="150" height="100"> <!-- Your Post Image -->
                              </a>
                          </div>
                          <div class="media-body">
                            <p class="small"><?php echo $icerikcek['icerik_zaman']; ?></p>
                            <a href="#">
                                <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cupiditate alias hic necessitatibus dicta suscipit maiores, ea iste nihil ex. Maxime enim, sint laborum possimus distinctio. Laborum, quae voluptatum enim!</p>
                        </div>
                    </div><!-- end post wrap -->

                    <div class="post-meta"> <!-- Meta details -->
                        <ul class="list-inline metas pull-left"> <!-- post metas -->
                            <li><a href="#">Kim Yazdı : Ümit UZ</a></li> <!-- meta author -->
                            <li><a href="#">20 Yorum</a></li> <!-- meta comments -->
                            <li><a href="#">Devamını Oku</a></li> <!-- read more link -->
                        </ul>
                        <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                            <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                            <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                        </ul>
                    </div><!-- end Meta details --> 
                </div><!-- end Post Wrapper -->

                <?php } ?>                

            </div> <!-- end Left content col 6 -->

        </div><!-- end row -->

        <div class="text-center">
            <a href="blog.php" class="btn btn-primary tf-btn color">TÜMÜNÜ GÖR</a>
        </div>                
    </div><!-- end container -->
</div> <!-- end fullwidth gray background -->
</div>