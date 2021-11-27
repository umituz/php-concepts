<?php

use Illuminate\Support\Collection;

require "../bootstrap.php";

class ExampleCollection
{
    public function example()
    {
        return $this->everyThree(collect([1,2,3,4]),[5,6,7,8],[9,10,11,12]);
    }


    public function everyThree(...$collections)
    {
        return collect($collections)->flatMap(function($item){
            return Collection::wrap($item)->nth(3);
        });
    }
}

dump((new ExampleCollection())->example());