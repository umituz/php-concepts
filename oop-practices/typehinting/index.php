<?php

require "person.php";

class Book
{
	public $price;
	public $authors;

	public function price(int $price)
	{
		$this->price = $price;
	}

	public function sinif(Person $persons)
	{
		$this->authors = $persons->names();
	}
}

$bk = new Book;
$authorsName = new Person;
$bk->price(10);
echo $bk->price;
echo "<br>";

$bk->sinif($authorsName);
var_dump($bk->authors);