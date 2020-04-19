<?php

spl_autoload_register(function($class){
    include_once  "Helpers/{$class}.php";
});

$check = new CheckHelper();
echo $check->is_empty();

echo "<br>";

$form = new FormHelper();
echo $form->checked();
