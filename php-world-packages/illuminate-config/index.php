<?php

use Illuminate\Config\Repository;

require_once '../vendor/autoload.php';

$configPath = __DIR__."/";

$config = new Repository(require $configPath . 'app.php');

dump($config);