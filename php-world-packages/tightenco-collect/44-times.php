<?php

use Illuminate\Support\Collection;

require "../bootstrap.php";

$newCollection  = Collection::times(3,function($value){
     dump(10);
});

