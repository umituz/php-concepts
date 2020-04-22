<?php

include_once "Router.php";

Router::get("/home",function(){
    echo "it works <br>";
});

Router::get("/test",function(){
    echo "it works<br>";
});

Router::get("/deneme/test/2",'Test@test');

