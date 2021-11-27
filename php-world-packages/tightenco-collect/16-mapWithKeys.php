<?php

require "../bootstrap.php";

$arr = collect(['value1' => 'first','value2' => 'second'])->mapWithKeys(function($item,$key){

    if($key == 'value2'){
        return [];
    }

    return [$item => $key];
});

dump($arr);

$arr2 = collect(['value1' => 'first','value2' => 'second'])->mapWithKeys(function($item,$key){

    return [
        $item => $key,
        $item . '_upper' => strtoupper($item)
    ];

});

dump($arr2);