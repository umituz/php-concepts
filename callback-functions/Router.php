<?php

class test{
    public function test($a=null,$b=null)
    {
        echo $b;
    }
}

class Router
{
    public static function get($url,$callback)
    {
        if(is_callable($callback)){
            call_user_func($callback);
        }else{
            $controller = explode("@",$callback)[0];
            $method = explode("@",$callback)[1];

            $params = explode("/",$_SERVER['REQUEST_URI']);

            call_user_func_array(array(new $controller,$method),$params);
        }
    }
}