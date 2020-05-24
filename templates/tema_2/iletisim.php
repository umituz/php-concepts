<?php
include 'header.php';
include 'menu.php';
?>

<div class="fix main_content_area">
	<div class="fix centre main_content">
		<div class="fix home_content floatleft">



			<div class="fix single_home_content ">
				<div class="page_style">
					<h2>İletişime Geç</h2>
					<p>Bize ulaşmak için bütün alanları eksiksiz bir şekilde doldurunuz. En kısa süre içerisinde size geri dönüş yapılacaktır.</p>
					<div class="contact_form">
						<form>
							<p><input type="text" class="wpcf7-text" placeholder="Ad-Soyad"/></p>
							<p><input type="text" class="wpcf7-email" placeholder="Email"/></p>
							<p><input type="text" class="wpcf7-text" placeholder="Konu"/></p>
							<p><textarea class="wpcf7-textarea" placeholder="Mesaj"></textarea></p>
							<p><input type="submit" class="wpcf7-submit" value="Gönder"/></p>
						</form>
					</div>
				</div>
			</div>

			<?php include 'son-haberler.php'; ?>

		</div> <!-- End home content-->

		<?php include 'sidebar.php'; ?>

	</div>
</div> <!-- End main content-->

<?php include 'aciklama.php'; include 'alt-menu.php'; include 'footer.php'; ?>