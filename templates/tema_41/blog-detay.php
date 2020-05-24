<?php 
include 'header.php'; 
$iceriksor=$db->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
	'icerik_id' => $_GET['icerik_id']
	));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>


<div class="container">
	<!--PAGE TITLE-->
	<div class="row">
		<div class="span12">
			<div class="page-header">
				<h1>
					Blog
				</h1>
			</div>
		</div>
	</div>
	<!-- /. PAGE TITLE-->
	<div class="row">
		<div class="span9">
			<!--Blog Post-->
			<div class="blog-post">
				<h2><?php echo $icerikcek['icerik_ad']; ?></h2>
				<div class="postmetadata">
					<ul>
						<li>
							<i class="icon-user"></i> <a href="#">Author Name</a>
						</li>
						<li>
							<i class="icon-calendar"></i>September 20th, 2013
						</li>
						<li>
							<i class="icon-comment"></i> <a href="#">100 Comments</a>
						</li>
						<li>
							<i class="icon-tags"></i> <a href="#">Themes</a>, <a href="#">Template</a>
						</li>
					</ul>
				</div>
				<img src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>">
				<p style="font-weight: bold;"><?php echo $icerikcek['icerik_ozet']; ?></p>	
				<p><?php echo $icerikcek['icerik_detay']; ?></p>
			</div>
			<!--/.Blog Post-->
			<!--Comments-->
			<h2>Yorumlar</h2>
			<div class="comments">

				<div class="media">
					<a href="#" class="pull-left"><img src="img/img-60x60.jpg" class="media-object" alt='' /></a>
					<div class="media-body">
						<h4 class="media-heading">
							Nested media heading
						</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
					</div>
				</div>
				<div class="media">
					<a href="#" class="pull-left"><img src="img/img-60x60.jpg" class="media-object" alt='' /></a>
					<div class="media-body">
						<h4 class="media-heading">
							Nested media heading
						</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.

						<div class="media">
							<a href="#" class="pull-left"><img src="img/img-60x60.jpg" class="media-object" alt='' /></a>
							<div class="media-body">
								<h4 class="media-heading">
									Nested media heading
								</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							</div>
						</div>


					</div>
				</div>



				<!--Post Comments-->

				<h2>Leave a Message</h2>

				<form>

					<input class="span8"  type="text" placeholder="Name" /> 
					<input class="span8" type="email" placeholder="Email" required /> 
					<textarea class="span8" rows="10" placeholder="Message" ></textarea>
					

					<button type="submit" class="btn btn-large btn-primary">Submit</button>

				</form>

				<!--/.Post Comments-->



			</div>

			<!--/.Comments-->





			
		</div>	



		<div class="span3">
			<div class="side-bar">

				<h3>Categories</h3>
				<ul class="nav nav-list">
					<li><a href="#">Web Design</a></li>
					<li><a href="#">Typography</a></li>
					<li><a href="#">Inspiration</a></li>
					<li><a href="#">Business</a></li>
				</ul>

			</div>


			<div class="side-bar">
				<h3>Tags</h3>

				<a href="#">cras</a>,
				<a href="#">sit</a>,
				<a href="#">amet</a>,
				<a href="#">nibh</a>,
				<a href="#">libero</a>,
				<a href="#">gravida</a>,
				<a href="#">nulla</a>
			</div>


			<div class="side-bar">
				<h3>Recent Post</h3>

				<ul class="recent-post">
					<li><a href=""><strong>The standard chunk of Lorem Ipsum used since </strong></a>
						<small><i class="icon-user"></i> <a href="#">Author Name</a>,  <i class="icon-calendar"></i>Jul 20th, 2013</small>
					</li>				

					<li><a href=""><strong>The standard chunk of Lorem Ipsum used since </strong></a>
						<small><i class="icon-user"></i> <a href="#">Author Name</a>,  <i class="icon-calendar"></i>Jul 20th, 2013</small>
					</li>

					<li><a href=""><strong>The standard chunk of Lorem Ipsum used since </strong></a>
						<small><i class="icon-user"></i> <a href="#">Author Name</a>,  <i class="icon-calendar"></i>Jul 20th, 2013</small>
					</li>


				</ul>

			</div>

		</div>

		<!--==================-->
	</div>
</div>

<?php include 'footer.php'; ?>