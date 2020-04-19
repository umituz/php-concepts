<?php

namespace Practice;

include "Main.php";
include "ExampleSecondTrait.php";
include "ExampleInterface.php";

use Practice\Main;
use Practice\ExampleInterface;
use Practice\ExampleSecondTrait;

class Example extends Main implements ExampleInterface
{
    use ExampleSecondTrait;

    public $value = 123;

    public $animal;

    private $password;

    static $number;

    public $interfaceVariable;

    public function test()
    {
        return "just test";
    }

    public function animal($name=null)
    {
        $this->animal = $name;
    }

    public function getAnimalName()
    {
        return $this->animal;
    }

    public function returnFunction()
    {
        return $this->getAnimalName();
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getProtectedAge()
    {
        return $this->age;
    }

    public static function increaseNumber()
    {
        static $number=0;
        $number+=1;
        return $number;
    }

    public function getParentFunction()
    {
        return $this->take();
    }

    public static function getStaticParentFunction()
    {
        return parent::take();
    }

    public function getParentTraitFunction()
    {
        return parent::action();
    }

    public function getName()
    {
        return $this->interfaceVariable;
    }

    public function setName(string $name)
    {
        $this->interfaceVariable = $name;
    }

    public function abstract_method()
    {
        return "Main klasördeki zorunlu metoddur.";
    }
}