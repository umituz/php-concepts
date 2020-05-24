<!--contact start-->

<div id="contact">

	<div class="line5">					
		<div class="container">
			<div class="row Ama">
				<div class="col-md-12">
					<h3>Bir Sorun mu Var?</h3>
					<p>O zaman daha da bekleme ve bize sor.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-9 col-xs-12 forma">
				<form>
					<input type="text" class="col-md-6 col-xs-12 name" name='name' placeholder='Ad-Soyad *'/>
					<input type="text" class="col-md-6 col-xs-12 Email" name='Email' placeholder='E-posta *'/>
					<input type="text" class="col-md-12 col-xs-12 Subject" name='Subject' placeholder='Konu'/>
					<textarea type="text" class="col-md-12 col-xs-12 Message" name='Message' placeholder='Mesajınız *'></textarea>
					<div class="cBtn col-xs-12">
						<ul>
							<li class="clear"><a href="#"><i class="fa fa-times"></i>Temizle</a></li>
							<li class="send"><a href="#"><i class="fa fa-share"></i>Gönder</a></li>
						</ul>
					</div>
				</form>
			</div>
			<div class="col-md-3 col-xs-12 cont">
				<ul>
					<li><i class="fa fa-home"></i><?php echo $ayarcek['ayar_adres']; ?> <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></li>
					<li><i class="fa fa-phone"></i><?php echo $ayarcek['ayar_tel']; ?></li>
					<li><i class="fa fa-list"></i><?php echo $ayarcek['ayar_mail']; ?></li>
					<li><i class="fa fa-table"></i><?php echo $ayarcek['ayar_siteurl']; ?></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="line6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d48386.401887313725!2d-73.9407136!3d40.7147117!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1402409149092" width="100%" height="750" frameborder="0" style="border:0"></iframe>			
	</div>

	<div class="container">
		<div class="row ftext">
			<div class="col-md-12">
				<a id="features"></a>
				<h3>We Care About Our Clients and Can Make Their Life Easier!</h3>
				<p>The main peculiarity of template is the striking presentation when visitors just need to use the scrolling option to find all necessary information about your web project. </p>
			</div>
			<div class="cBtn">
				<ul style="margin-top: 23px; margin-bottom: 0px; padding-left: 26px;">
					<li class="dowbload"><a href="#"><i class="fa fa-star"></i>View All Features</a></li>
					<li class="buy"><a href="#"><i class="fa fa-download"></i>Buy This Template</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="line7">
		<div class="container">
			<div class="row footer">
				<div class="col-md-12">
					<h3>Bültene Kayıt Ol!</h3>
					<p>En son haberlerden anında haberdar olmak istiyorsanız, bültene kayıt olun!</p>
					<div class="fr">
						<div style="display: inline-block;">
							<input class="col-md-6 fEmail" name='Email' placeholder='E-posta adresiniz'/>
							<a href="#" class="subS">Bültene Kayıt Ol!</a>
						</div>
					</div>
				</div>
				<div class="soc col-md-12">
					<ul>
						<li class="soc1"><a href="<?php echo $ayarcek['ayar_linkedin']; ?>"></a></li>
						<li class="soc2"><a href="<?php echo $ayarcek['ayar_facebook']; ?>"></a></li>
						<li class="soc3"><a href="<?php echo $ayarcek['ayar_twitter']; ?>"></a></li>
						<li class="soc4"><a href="<?php echo $ayarcek['ayar_pinterest']; ?>"></a></li>
						<li class="soc5"><a href="#"></a></li>
						<li class="soc6"><a href="<?php echo $ayarcek['ayar_youtube']; ?>"></a></li>
						<li class="soc7"><a href="<?php echo $ayarcek['ayar_google']; ?>"></a></li>
						<li class="soc8"><a href="#"></a></li>

					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="lineBlack">
		<div class="container">
			<div class="row downLine">
				<div class="col-md-12 text-right">
					<!--input  id="searchPattern" type="search" name="pattern" value="Search the Site" onblur="if(this.value=='') {this.value='Search the Site'; }" onfocus="if(this.value =='Search the Site' ) this.value='';this.style.fontStyle='normal';" style="font-style: normal;"/-->
					<input  id="searchPattern" type="search" placeholder="Bir şeyler arayın..."/><i class="glyphicon glyphicon-search" style="font-size: 13px; color:#a5a5a5;" id="iS"></i>
				</div>
				<div class="col-md-6 text-left copy">
					<p><?php echo $ayarcek['ayar_footer']; ?></p>
				</div>
				<div class="col-md-6 text-right dm">
					<ul id="downMenu">
						<li class="active"><a href="#home">Anasayfa</a></li>
						<li><a href="#about">Hakkımızda</a></li>
						<li><a href="#project1">Referanslar</a></li>
						<li><a href="#news">Blog</a></li>
						<li class="last"><a href="#contact">İletişim</a></li>
						<!--li><a href="#features">Features</a></li-->
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>	