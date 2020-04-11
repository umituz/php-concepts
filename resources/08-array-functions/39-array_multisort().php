<?php
/**
    array_multisort()	:	Bir veya birden fazla dizinin elemanlarını gelişmiş olarak çok yönlü sıralamak için kullanılır.
	SORT_ASC			:	A'dan Z'ye / Küçükten büyüğe
	SORT_DESC			:	Z'den A'ya / Büyükten küçüğe
	SORT_REGULAR		:	Standart sıralama (Varsayılan)
	SORT_NUMERIC		:	Rakamsal sıralama
	SORT_STRING			:	Alfanumerik sıralama (String)
	SORT_NATURAL		:	Alfanumerik sıralama (String) (Doğal)
*/

$Degerler	=	array("Volkan",89,123,"Umut",5.54 ,5.55,"Hakan",6.79, "Onur", "Serkan", "Levent");

echo "<pre>";
print_r($Degerler);
echo "<pre><br />";

array_multisort($Degerler,SORT_NATURAL);

echo "<pre>";
print_r($Degerler);
echo "<pre><br />";