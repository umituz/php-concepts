<?php

namespace Practice;

include "ExampleTrait.php";

use Practice\ExampleTrait;

abstract class Main
{
    use ExampleTrait;

    protected $age = 23;

    abstract public function abstract_method();

    public function __construct()
    {
        echo "Main class constructor called <br>";
    }

    public function __destruct()
    {
        echo "<br> Main class destructor called";
    }

    public function take()
    {
        return self::give();
    }

    public function give()
    {
        return "not so complex";
    }

}