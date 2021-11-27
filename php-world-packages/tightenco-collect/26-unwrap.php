<?php

use Illuminate\Support\Collection;

require "../bootstrap.php";

class ExampleCollection
{
    public function example()
    {
        return $this->mergeArray(collect([1,2,3,4]),'string',[5,6,7,8,9],'another string');
    }


    public function mergeArray(...$arrays)
    {
        return collect($arrays)->flatMap(function($item){
           return array_wrap(Collection::unwrap($item));
        })->all();
    }
}

dump((new ExampleCollection())->example());