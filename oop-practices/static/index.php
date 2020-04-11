<?php

class User
{
	static public $name="umut";

	static public $number=0;

	static public function getName()
	{
		return self::$name = "Ümit UZZZZZ";

	}

	static public function increment()
	{
		self::$number += 1;
	}

}

//User::getName();
User::increment();
while(User::$number <= 100)
{
	echo User::$number."-";
	User::increment();
}
//echo User::$number;

