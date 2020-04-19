<?php

namespace System\Crud;

trait CrudTrait
{
    public function get()
    {
        return "SELECT * FROM " . $this->table;
    }
}