<?php

class Bill
{
	public $dinner = 24;
	public $dessert = 7;
	public $coldDrink = 3;
	public $bill;

	public function __construct()
	{
		$this->bill = 3;
	}

	public function dinner($person)
	{
		$this->bill += $this->dinner * $person;
		return $this;
	}

	public function dessert($person)
	{
		$this->bill += $this->dessert * $person;
		return $this;
	}

	public function coldDrink($person)
	{
		$this->bill += $this->coldDrink * $person;
		return $this;
	}

	public function __destruct()
	{
		 echo $this->bill;
	}
}

$bill = new Bill;
$bill->dessert(3)->dinner(5)->coldDrink(4)->bill;