<?php

/*
	count()				:	Dizi içerisindeki eleman sayısını bulmak için kullanılır.
	sizeof()			:	Dizi içerisindeki eleman sayısını bulmak için kullanılır.
	COUNT_RECURSIVE		:	Çok boyutlu dizilerde, tüm boyutlar içerindeki elemanlarda sayma işlemine dahil edilir.
	*/

$arr = [0,[0,[0,[0,1,2,3,4,5,6,7,8,9],1,2,3,4,5,6,7,8,9],1,2,3,4,5,6,7,8,9],1,2,3,4,5,6,7,8,9,10];

echo count($arr,COUNT_RECURSIVE);
//echo sizeof($arr);