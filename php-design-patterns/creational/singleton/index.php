<?php

class Config
{
    private static $instance = null;

    public $name;

    public $password;

    private function __construct() {}

    /**
     * @return static
     */
    public static function getInstance()
    {
        if (!isset(self::$instance) && self::$instance === null) {
            self::$instance = new static();
//            self::$instance = new self();
        }
        return self::$instance;
    }
}
//
//
//$config = new Config();
//$config->name = 'ÜmitUZ';
//$config->password = '1234';
//
//$config2 = new Config();
//
//echo $config2->name;
//echo "\n";
//echo $config2->password;
//echo "\n";

$config = Config::getInstance();
$config->name = 'Ümit UZ';
$config->password = '1234';

$config2 = Config::getInstance();

echo $config2->name;
echo "\n";
echo $config2->password;
echo "\n";