<?php include 'header.php'; ?>

<div id="body" class="contact">
	<div>
		<h1>İletişim</h1>
		<img src="images/map.png" alt="">
		<h2>Adres</h2>
		<p><?php echo $ayarcek['ayar_adres']; ?> <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?></p>
		<h2>Telefon</h2>
		<a href="index.php"><?php echo $ayarcek['ayar_tel']; ?></a>
		<h2>E-posta</h2>
		<a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"><?php echo $ayarcek['ayar_mail']; ?></a>
		<h4>Şimdi Koşuya Katıl!</h4>
		<form action="index.html">
			<input type="text" name="name" value="Ad-Soyad" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
			<input type="text" name="Address" value="Adres" onblur="this.value=!this.value?'Address':this.value;" onfocus="this.select()" onclick="this.value='';">
			<input type="text" name="Email" value="E-posta" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
			<textarea name="meassage" cols="50" rows="7">Mesaj</textarea>
			<input type="submit" value="Gönder" id="submit">
		</form>
	</div>
</div>

<?php include 'footer.php'; ?>