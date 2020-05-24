<?php 
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
   'icerik_id' => $_GET['icerik_id']
   ));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>

<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Blog Item</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Blog Item</li>
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
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" width="100%" alt="" />
                    <div class="blog-content">
                        <h3><?php echo $icerikcek['icerik_ad']; ?></h3>
                        <div class="entry-meta">
                            <span><i class="icon-user"></i> <a href="#">John</a></span>
                            <span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
                            <span><i class="icon-calendar"></i> Sept 16th, 2012</span>
                            <span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span>
                        </div>
                        <p class="lead"><?php echo $icerikcek['icerik_ozet']; ?></p>
                        <p class="lead"><?php echo $icerikcek['icerik_detay']; ?></p>

                        <hr>

                        <div class="tags">
                            <i class="icon-tags"></i> Tags <a class="btn btn-xs btn-primary" href="#">CSS3</a> <a class="btn btn-xs btn-primary" href="#">HTML5</a> <a class="btn btn-xs btn-primary" href="#">WordPress</a> <a class="btn btn-xs btn-primary" href="#">Joomla</a>
                        </div>

                        <p>&nbsp;</p>

                        <div class="author well">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="avatar img-thumbnail" src="images/blog/avatar.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <strong>John Doe</strong>
                                    </div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                                </div>
                            </div>
                        </div><!--/.author-->

                        <div id="comments">
                            <div id="comments-list">
                                <h3>3 Comments</h3>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar img-circle" src="images/blog/avatar1.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="well">
                                            <div class="media-heading">
                                                <strong>John Doe</strong>&nbsp; <small>27 Aug 2013</small>
                                                <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
                                            </div>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="avatar img-circle" src="images/blog/avatar3.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="well">
                                                    <div class="media-heading">
                                                        <strong>John Doe</strong>&nbsp; <small>27 Aug 2013</small>
                                                        <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
                                                    </div>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                                </div>
                                            </div>
                                        </div><!--/.media-->
                                    </div>
                                </div><!--/.media-->
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar img-circle" src="images/blog/avatar2.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="well">
                                            <div class="media-heading">
                                                <strong>John Doe</strong>&nbsp; <small>27 Aug 2013</small>
                                                <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
                                            </div>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                        </div>
                                    </div>
                                </div><!--/.media-->
                            </div><!--/#comments-list-->  

                            <div id="comment-form">
                                <h3>Leave a comment</h3>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea rows="8" class="form-control" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-lg">Submit Comment</button>
                                </form>
                            </div><!--/#comment-form-->
                        </div><!--/#comments-->
                    </div>
                </div><!--/.blog-item-->
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