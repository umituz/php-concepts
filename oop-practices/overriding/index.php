<?php
// final function ise  overriding edemezsin, class ise extends edemezsin.
class Book
{
	public static $name = "umut";

	public static function author()
	{
		return "Book yazar : ".self::$name; 
	}

	public static function getAuthor()
	{
		echo static::author();
	}
}

class newBook extends Book
{
	public static function author()
	{
		return "newBook ve yazarlar : ".self::$name." ve ümit";
	}
}

class aBook extends Book
{

}

$a = new aBook;
echo $a->author();

/*
echo Book::getAuthor(); 
echo "<br>";
echo newBook::getAuthor();
*/
/*
$book = new Book;
echo $book->getAuthor();*/