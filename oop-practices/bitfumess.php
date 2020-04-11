<?php

include "index.php";

$ogrenci = new Student;
$ogrenci->studentDetails('Ahmet',true,80);
echo $ogrenci->totalMax;