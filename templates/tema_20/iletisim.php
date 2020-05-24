<?php 
include 'header.php';
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC); ?>

<div id="body">
	<h1><span><?php echo $iletisimcek['iletisim_ad']; ?></span></h1>
	<p><span><?php echo $iletisimcek['iletisim_detay']; ?></span></p>
	<form action="#">
		<input type="text" name="fname" id="fname" placeholder="Adınız">
		<input type="text" name="address" id="address" placeholder="Yerleşim adresiniz">
		<input type="text" name="email" id="email" placeholder="E-posta adresiniz">
		<input type="text" name="phone" id="phone" placeholder="Telefon numaranız">
		<textarea name="message" placeholder="İletmek istediğiniz mesajınız..." id="message"></textarea>
		<input type="submit" name="send" id="send" value="Gönder">
	</form>
</div>

<?php include 'footer.php'; ?>