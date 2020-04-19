<?php

namespace App\Http\Controllers;

use App\Models\User;
use System\Curl\Curl;

class ServiceController
{
    public function show()
    {
        return (new User())->get();
    }

    public function curl()
    {
        return (new Curl())->connect();
    }

    public function helper()
    {
        return hello_world("Python");
    }
}