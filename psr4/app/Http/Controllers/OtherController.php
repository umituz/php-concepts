<?php

namespace App\Http\Controllers;

class OtherController
{
    public function test()
    {
        return "test";
    }

    public function extended()
    {
        return (new ServiceController())->helper();
    }

    public function public()
    {
        $file =  public_path("test.txt");


        $a = file_get_contents($file);
        echo "<pre>";

        foreach(file($file) as $file){
            echo $file;
        };
        echo "</pre>";
    }
}