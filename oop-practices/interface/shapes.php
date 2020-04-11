<?php

require "autoload.php";

class Ucgen implements shapeInterface,geometryInterface
{
	public function cember($param1,$param2)
	{
		echo $param1 * $param2;
	}

	public function getArea()
	{
		echo 'Üçgen Alanı';
	}
}

class Dikdortgen implements shapeInterface,geometryInterface
{
	public function cember($a,$b)
	{
		echo "{$a} ve {$b}";
	}
	public function getArea()
	{
		echo "Dikdörtgen alanı getArea()";
	}

	public function calculateArea()
	{
		echo 'Dikdörtgen Alanı';
	}
}

$ucgen = new Ucgen;

$ucgen->getArea();

echo "<br>";

$ucgen->cember(2,5);

echo "<br>";

$dikdortgen = new Dikdortgen;

$dikdortgen->getArea();

echo "<br>";

$dikdortgen->cember("sen","ben");