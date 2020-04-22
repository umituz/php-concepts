<?php

use Illuminate\Config\Repository;

if(! function_exists('public_path'))
{
    function public_path($filename=null)
    {
        return dirname(__DIR__,2) ."/public/" . $filename;
    }
}

if(! function_exists('resource_path'))
{
    function resource_path($filename=null)
    {
        return dirname(__DIR__,2) ."/resource/" . $filename;
    }
}

if(! function_exists('asset'))
{
    function asset($filename=null)
    {
        return config('app')['base_url'] ."/public/" . $filename;
    }
}

if(! function_exists('config'))
{
    function config($file='app')
    {
        $configPath = dirname(__DIR__, 2) . "/config/{$file}.php";
        return new Repository(require $configPath);
    }
}

function hello_world($language="Php")
{
    return "Hello World With {$language}";
}

