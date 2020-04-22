<?php

class maincontroller
{
    public function __construct()
    {
        function view($file,$vars=false)
        {
            is_array($vars) ? extract($vars) : [];
            include_once dirname(__DIR__,1) . "/views/$file.view.php";
        }
    }
}