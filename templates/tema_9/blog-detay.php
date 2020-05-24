<?php 
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
    'icerik_id' => $_GET['icerik_id']
    ));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>
?>


    <!-- Page Header
    ================================================== -->
    <div id="tf-header">
        <div class="container"> <!-- container -->
            <h1>Blog Post</h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a class="active">Blog Post</a></li>
            </ol>
        </div><!-- end container -->
    </div>

    <!--  Blog Section
    ================================================== -->
    <div id="tf-blog" class="blog-post">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2><strong>Blog Detayları</strong></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
        </div>

        <div id="blog-post"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->

                <div class="row"> <!-- row -->
                    <div class="col-md-6 col-md-offset-1"> <!-- Left Blogrol col 8 -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <p class="small"><?php echo $icerikcek['icerik_zaman']; ?></p>
                            <a href="#">
                                <h5 class="media-heading"><strong><?php echo $icerikcek['icerik_ad']; ?></strong></h5>
                            </a>

                            <ul class="list-inline metas pull-left"> <!-- post metas -->
                                <li><a href="#">Kim Yazdı : Ümit UZ</a></li> <!-- meta author -->
                                <li><a href="#comments" class="scroll">20 Yorum</a></li> <!-- meta comments -->
                            </ul>

                            <img src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" width="800" height="500" class="img-responsive" alt="...">

                            <p><?php echo $icerikcek['icerik_detay']; ?></p>

                            <br>
                            <br>
                            <p><strong>Etiket Bulutu:</strong></p>
                            <ul class="list-inline meta-tags">
                                <li><a href="#"><?php echo $icerikcek['icerik_keywords']; ?></a></li>
                            </ul>
                        </div><!-- end Post Wrapper -->

                        <div class="media post-author"> <!-- Author Box -->
                            <div class="media-left media-middle">
                                <a href="#">
                                  <img class="media-object" src="resimler/umut.jpg" width="90" height="90" alt="...">
                              </a>
                          </div>
                          <div class="media-body">
                            <h5 class="media-heading">Post by <a href="#">Rudhi Design</a></h5>
                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                        </div>
                    </div>

                    <?php include 'yorumlar.php'; ?>

                </div> <!-- end Left content col 8 -->

                <?php include 'sidebar.php'; ?>

            </div><!-- end row -->

        </div><!-- end container -->
    </div> <!-- end fullwidth gray background -->
</div>

<?php include 'footer.php'; ?>