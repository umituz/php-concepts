<?php 
include 'baglan.php';

$ayarsor=$db->prepare("SELECT * FROM ayar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
extract($ayarcek);

$limit = explode("|", $ayar_sayfalama);

define("BLOG_LIMIT" , $limit[0]);
define("DERS_LIMIT" , $limit[1]);
define("REFERANS_LIMIT" , $limit[2]);


define("SITE_TITLE", $ayar_title);
define("SITE_DESCRIPTION", $ayar_description);
define("SITE_KEYWORDS", $ayar_keywords);


?>