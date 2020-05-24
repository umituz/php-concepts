<?php
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
    'icerik_id' => $_GET['icerik_id']
    ));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>


<section id="blog" class="container">
    <div class="center">
        <h2>Blog</h2>
        <p class="lead">ehü vehü cehüleri dinleme sen, kendini şeyi yap işte</p>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" width="100%" alt="" />
                    <div class="row">  
                        <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date"><?php echo $icerikcek['icerik_zaman']; ?></span>
                                <span><i class="fa fa-user"></i> <a href="#"> ÜMİT UZ</a></span>
                                <span><i class="fa fa-comment"></i> <a href="blog-detay.php#comments">2 Yorum</a></span>
                                <span><i class="fa fa-heart"></i><a href="#">56 Beğeni</a></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-10 blog-content">
                            <h2><?php echo $icerikcek['icerik_ad']; ?></h2>
                            <p style="font-weight: bold"><?php echo $icerikcek['icerik_ozet']; ?></p>
                            <p><?php echo $icerikcek['icerik_detay']; ?></p>

                            <div class="post-tags">
                                <strong>Etiket Bulutu:</strong> <?php echo $icerikcek['icerik_keywords']; ?>
                            </div>

                        </div>
                    </div>
                </div><!--/.blog-item-->

                <div class="media reply_section">
                    <div class="pull-left post_reply text-center">
                        <a href="#"><img src="images/blog/boy.png" class="img-circle" alt="" /></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
                        </ul>
                    </div>
                    <div class="media-body post_reply_content">
                        <h3>Antone L. Huges</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturp</p>
                        <p><strong>Web:</strong> <a href="http://www.shapebootstrap.net">www.shapebootstrap.net</a></p>
                    </div>
                </div> 

                <h1 id="comments_title">5 Comments</h1>
                <div class="media comment_section">
                    <div class="pull-left post_comments">
                        <a href="#"><img src="images/blog/girl.png" class="img-circle" alt="" /></a>
                    </div>
                    <div class="media-body post_reply_comments">
                        <h3>Marsh</h3>
                        <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                        <a href="#">Reply</a>
                    </div>
                </div> 
                <div class="media comment_section">
                    <div class="pull-left post_comments">
                        <a href="#"><img src="images/blog/boy2.png" class="img-circle" alt="" /></a>
                    </div>
                    <div class="media-body post_reply_comments">
                        <h3>Marsh</h3>
                        <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                        <a href="#">Reply</a>
                    </div>
                </div> 
                <div class="media comment_section">
                    <div class="pull-left post_comments">
                        <a href="#"><img src="images/blog/boy3.png" class="img-circle" alt="" /></a>
                    </div>
                    <div class="media-body post_reply_comments">
                        <h3>Marsh</h3>
                        <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                        <a href="#">Reply</a>
                    </div>
                </div> 


                <div id="contact-page clearfix">
                    <div class="status alert alert-success" style="display: none"></div>
                    <div class="message_heading">
                        <h4>Leave a Replay</h4>
                        <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
                    </div> 

                    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="url" class="form-control">
                                </div>                    
                            </div>
                            <div class="col-sm-7">                        
                                <div class="form-group">
                                    <label>Message *</label>
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                                </div>                        
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                                </div>
                            </div>
                        </div>
                    </form>     
                </div><!--/#contact-page-->
            </div><!--/.col-md-8-->

            <aside class="col-md-4">
                <div class="widget search">
                    <form role="form">
                        <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                    </form>
                </div><!--/.search-->

                <div class="widget categories">
                    <h3>Recent Comments</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="single_comments">
                                <img src="images/blog/avatar3.png" alt=""  />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                <div class="entry-meta small muted">
                                    <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                </div>
                            </div>
                            <div class="single_comments">
                                <img src="images/blog/avatar3.png" alt=""  />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                <div class="entry-meta small muted">
                                    <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                </div>
                            </div>
                            <div class="single_comments">
                                <img src="images/blog/avatar3.png" alt=""  />
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                <div class="entry-meta small muted">
                                    <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                </div>
                            </div>

                        </div>
                    </div>                     
                </div><!--/.recent comments-->


                <div class="widget categories">
                    <h3>Categories</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="blog_category">
                                <li><a href="#">Computers <span class="badge">04</span></a></li>
                                <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                <li><a href="#">Gedgets <span class="badge">06</span></a></li>
                                <li><a href="#">Technology <span class="badge">25</span></a></li>
                            </ul>
                        </div>
                    </div>                     
                </div><!--/.categories-->

                <div class="widget archieve">
                    <h3>Archieve</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="blog_archieve">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</a></li>
                            </ul>
                        </div>
                    </div>                     
                </div><!--/.archieve-->

                <div class="widget tags">
                    <h3>Tag Cloud</h3>
                    <ul class="tag-cloud">
                        <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
                    </ul>
                </div><!--/.tags-->

                <div class="widget blog_gallery">
                    <h3>Our Gallery</h3>
                    <ul class="sidebar-gallery">
                        <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
                        <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
                    </ul>
                </div><!--/.blog_gallery-->

            </aside>     

        </div><!--/.row-->

    </div><!--/.blog-->

</section><!--/#blog-->


<?php include 'footer.php'; ?>