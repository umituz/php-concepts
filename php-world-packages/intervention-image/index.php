<?php

require '../vendor/autoload.php';

use Intervention\Image\ImageManager;

$manager = new ImageManager(array('driver' => 'gd'));

//$image = $manager->make('public/foo.jpg')->resize(300, 200);

dd($manager);


