<?php

namespace App\Models;

use System\Crud\CrudTrait;

class User
{
    use CrudTrait;

    protected $table = "users";

}