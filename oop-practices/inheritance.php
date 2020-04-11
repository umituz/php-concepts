<?php

class Parent
{
	//code
}

class Child extends Parent
{
	// code
}

class Fruit
{
	public $name;

	public function setName($name)
	{
		$this->name = $name;
	}
}

class Apple extends Fruit
{
	public function juice()
	{
		echo 'juice';
	}
}

class Mango extends Fruit
{

}
/*
$mango = new Mango;
$mango->setName("Mango");
echo $mango->name;*/


$apple = new Apple;
$apple->setName("Elma");
echo $apple->name;