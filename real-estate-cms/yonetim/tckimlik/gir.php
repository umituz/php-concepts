<?php 
ob_start();
session_start();

if ($_SESSION['tcok']!="tcok") {

	header("Location:test.php");

	exit;
	
}

 ?>

 <p>tc doğruladığınız için bu sayfayı goruyorsunuz.<br></p>

 <a href="cik.php">Güvenli Çıkış.</a>