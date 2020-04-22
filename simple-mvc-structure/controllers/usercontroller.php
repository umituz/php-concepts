<?php

use Models\user;

class usercontroller
{
    public function view($file,$vars=false)
    {
        extract($vars);
        include_once "views/$file.php";
    }

    public function show()
    {
        $user = new user();
        return $user->get();
    }
}