<?php

/*
	array_unshift()		:	Dizinin en başına yeni eleman veya elemanlar eklemek için kullanılır. Aynı zamanda eklenecek olan eleman veya elemanların diziye dahil edilmesi ile, dizi içeriğinin toplam eleman sayısı değerini geriye döndürür.
	array_push()		:	Dizinin en sonuna yeni eleman veya elemanlar eklemek için kullanılır. Aynı zamanda eklenecek olan eleman veya elemanların diziye dahil edilmesi ile, dizi içeriğinin toplam eleman sayısı değerini geriye döndürür.
	*/

$arr = ["a","b","c"];

$a = array_unshift($arr,"u");
$b = array_push($arr,"z");
print_r($arr);