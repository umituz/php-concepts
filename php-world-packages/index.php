<?php

require "bootstrap.php";

dd([
    'welcome' => 'Laravel olmadan da laravel ve onunla ilgili paketleri kullanabileceğiniz genişletilebilir proje.',
    'author' => 'Ümit UZ',
    'vision' => 'Change The World',
    'mission' => 'Doing your own best',
    'age' => 23
]);

//$user = User::create(
//    ['name' => "Umut UZ",    'email' => "umituz998@gmail.com",'password' => password_hash("123456",PASSWORD_BCRYPT), ]
//);
//
//print_r($user->todo()->create([
//
//    'todo' => "Working with Eloquent Without PHP",
//
//    'category' => "eloquent",
//
//    'description' => "Testing the work using eloquent without laravel"
//
//]));