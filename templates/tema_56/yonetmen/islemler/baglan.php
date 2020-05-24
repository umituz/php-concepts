<?php 

try {
	
	$db= new PDO("mysql:host=localhost;dbname=tema",'root','leader.end98');

} catch (PDOExpception $e) {
	echo $e->getMessage();
}

 ?>