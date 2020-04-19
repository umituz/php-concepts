<?php

class Route
{
    protected static $url;

    public function __construct($url)
    {
        self::$url = $url;

        function view($param)
        {
            include_once "views/{$param}.php";
        }
    }

    public static function get($url, $callback)
    {
        if(self::$url == $url){
            $type = gettype($callback);
            if ($type == "object") {
                call_user_func($callback);
            }else{
                $controllerName = explode('@',$callback)[0];
                $methodName = explode('@',$callback)[1];
                $controller = new $controllerName($_GET['url']);
                $controller->$methodName();
            }
        }
    }

    public function contact()
    {
        echo "test";
    }
}