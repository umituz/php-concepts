<?php
/*
	$GLOBALS	:	Atanacak olan değişken için kapsama / etki alanlarının değiştirilmesini sağlar. Bu sayede global (küresel) alanda tanımlanmış bir değişkene local (yerel) alandan, local (yerel) alanda tanımlanmış bir değişkene global (küresel) alandan ulaşılabilme imkanı tanır.
*/

//echo "<pre>";
//var_dump($GLOBALS);
//echo "</pre>";

$GLOBALS['umut'] = "Ümit UZ";

function deneme()
{
    global $umut;
    echo $umut;
}

deneme();


?>

