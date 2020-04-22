<?php

class maincontroller
{
    public function __construct()
    {
        function view($file,$vars=false){

            if($vars != false){
                extract($vars);
            }

            include_once 'app/views/' . $file . '.php';
        }

        function redirect($redirect){
            header("location:" . $redirect);
        }

    }

}