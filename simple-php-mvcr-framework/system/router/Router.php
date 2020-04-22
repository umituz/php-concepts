<?php

class Router
{
    private static $url;

    public function __construct($requestUrl)
    {
        self::$url = trim($requestUrl,"/");
    }

    public static function get($functionUrl,$callback)
    {
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $functionUrl = trim($functionUrl,"/");
            if(self::$url == $functionUrl){
                call_user_func($callback);
            }
        }
    }

    public static function post()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            echo self::$url;
        }
    }

    public static function put()
    {

    }

    public static function delete()
    {

    }
}