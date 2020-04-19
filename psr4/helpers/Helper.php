<?php

if(! function_exists('public_path'))
{
    function public_path($filename=null)
    {
        return dirname(__DIR__,1) ."/public/" . $filename;
    }
}

if(! function_exists('resource_path'))
{
    function resource_path($filename=null)
    {
        return dirname(__DIR__,1) ."/resource/" . $filename;
    }
}
function hello_world($language="Php")
{
    return "Hello World With {$language}";
}

function br($number=1)
{
    for($i=0;$i<$number;$i++){
        echo "<br>";
    }
}