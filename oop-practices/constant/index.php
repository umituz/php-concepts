<?php

class Cember
{
	const PI = 3.14159;

	public function alan($yaricap)
	{
		return $yaricap * $yaricap * self::PI;
	}
}


$cember = new Cember;
echo $cember->alan(5);
echo "<br>";
echo $cember::PI; // sabit constant => const
echo "<br>";
