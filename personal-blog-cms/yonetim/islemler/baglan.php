<?php 

try {
	$db = new PDO ("mysql:host=localhost;dbname=umituz",'root','leader.end98');
}

catch(PDOException $e){
	echo $e->getMessage();
}

?>