<?php

require "../bootstrap.php";

class User{
    protected $table="users";
}

$collection = collect([
    new User()
]);

$newCollection  = $collection->whereInstanceOf(User::class);

dump($newCollection);