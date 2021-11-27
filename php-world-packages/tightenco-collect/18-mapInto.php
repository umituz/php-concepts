<?php

require "../bootstrap.php";

$arr = collect([1,2,3,4])->mapInto(Converter::class)->map(function($item){
    return $item->toCentimeters();
});

class Converter
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function toCentimeters()
    {
        return $this->amount * 2.54;
    }
}

dump($arr);