<?php

class Pdf
{
    public $file;

    public function save()
    {
        return "save method worked";
    }
}

class Address
{
    public $street;

    public $city;

    public $country;
}

class Bill
{
    public $price;

    public $tax;

    public $total;

    public Pdf $pdf;

    public Address $address;
}

class BillFactory
{
    public function makeBill($price): Bill
    {
        $address = new Address();
        $pdf = new Pdf();
        $bill = new Bill();
        $bill->address = $address;
        $bill->pdf = $pdf;
        $bill->price = $price;
        $bill->tax = $price * 0.18;
        $bill->total = $bill->price + $bill->tax;

        return $bill;
    }
}

$billFactory = new BillFactory();
$bill = $billFactory->makeBill(100);
//echo "<pre>";
//print_r($bill);
//echo "</pre>";

echo $bill->pdf->save();