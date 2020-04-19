<?php

include_once "Route.php";

new Route($_GET['url']);

Route::get('homepage',function(){
    return view("homepage");
});

Route::get('about',function(){
    return view("about");
});

Route::get('contact','Route@contact');