<?php 
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
	'icerik_id' => $_GET['icerik_id']
	));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
extract($icerikcek);
?>

<div role="main" class="main">
	<div class="container">
		<div class="row pt-xl">

			<div class="col-md-12">

				<div class="blog-posts single-post mt-xl">

					<article class="post post-large blog-single-post">

						<div class="post-date">
							<span class="day">10</span>
							<span class="month">Jan</span>
						</div>

						<div class="post-content">

							<h1><?php echo $icerik_ad; ?></h1>

							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="post-meta">
								<span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
								<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
								<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
							</div>

							<img src="dosyalar/resimler/icerik/<?php echo $icerik_resimyol; ?>" class="img-responsive pull-left mb-xs mr-xl" alt="<?php echo $icerik_ad; ?>">

							<p class="lead"><div style="text-align: justify;"><?php echo $icerik_detay; ?></div></p>
							<p style="font-size: 15px;"><b>Anahtar Kelimeler : </b>
								<?php 
								$etiketler=explode(',',$icerik_keywords);
								foreach ($etiketler as $etiket) {?>
								<a href="#"><button class="btn btn-primary"><?php echo $etiket; ?></button></a>
								<?php } ?>
							</p>

							<div class="pt-sm pb-xs">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style">
									<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
									<a class="addthis_button_tweet"></a>
									<a class="addthis_button_pinterest_pinit"></a>
									<a class="addthis_counter addthis_pill_style"></a>
								</div>
								<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
								<!-- AddThis Button END -->
							</div>

							<div class="post-block post-author mt-xl clearfix">
								<h4 class="mt-xl mb-none">Author</h4>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<div class="img-thumbnail">
									<a href="blog-post.html">
										<img src="img/team/team-22.jpg" alt="">
									</a>
								</div>
								<p><strong class="name mb-md">John Doe</strong></p>
								<p class="mt-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat.</p>
							</div>

							<div class="post-block post-comments clearfix">
								<h4 class="mt-xl mb-none">Comments</h4>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>

								<ul class="comments">
									<li>
										<div class="comment">
											<div class="img-thumbnail">
												<img class="avatar" alt="" src="img/team/team-23.jpg">
											</div>
											<div class="comment-block">
												<div class="comment-arrow"></div>
												<span class="comment-by">
													<strong>John Doe</strong>
													<span class="pull-right">
														<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
													</span>
												</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
												<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
											</div>
										</div>

										<ul class="comments reply">
											<li>
												<div class="comment">
													<div class="img-thumbnail">
														<img class="avatar" alt="" src="img/team/team-24.jpg">
													</div>
													<div class="comment-block">
														<div class="comment-arrow"></div>
														<span class="comment-by">
															<strong>John Doe</strong>
															<span class="pull-right">
																<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
															</span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
														<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
													</div>
												</div>
											</li>
											<li>
												<div class="comment">
													<div class="img-thumbnail">
														<img class="avatar" alt="" src="img/team/team-25.jpg">
													</div>
													<div class="comment-block">
														<div class="comment-arrow"></div>
														<span class="comment-by">
															<strong>John Doe</strong>
															<span class="pull-right">
																<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
															</span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
														<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="comment">
											<div class="img-thumbnail">
												<img class="avatar" alt="" src="img/team/team-22.jpg">
											</div>
											<div class="comment-block">
												<div class="comment-arrow"></div>
												<span class="comment-by">
													<strong>John Doe</strong>
													<span class="pull-right">
														<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
													</span>
												</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
											</div>
										</div>
									</li>
									<li>
										<div class="comment">
											<div class="img-thumbnail">
												<img class="avatar" alt="" src="img/team/team-22.jpg">
											</div>
											<div class="comment-block">
												<div class="comment-arrow"></div>
												<span class="comment-by">
													<strong>John Doe</strong>
													<span class="pull-right">
														<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
													</span>
												</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
											</div>
										</div>
									</li>
								</ul>

							</div>

							<div class="post-block post-leave-comment pb-none">
								<h4 class="mt-xl mb-none">Leave a Comment</h4>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>

								<form action="" method="post">
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>Your name *</label>
												<input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
											</div>
											<div class="col-md-6">
												<label>Your email address *</label>
												<input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Comment *</label>
												<textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>

						</div>
					</article>

				</div>

			</div>

		</div>

	</div>
</div>

<?php include 'footer.php'; ?>