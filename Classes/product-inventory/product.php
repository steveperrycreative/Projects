<?php

class Product
{

    private $price = '';
    private $id = '';
    private $quantity = '';

    public function priceFree() {
        $this->price = 0;
        echo 'The price is FREE';
    }

    public function price200() {
        $this->price = 200;
        echo 'The price is 200';
    }

}

$productOne = new Product;
$productOne->priceFree();

$productTwo = new Product;
$productTwo->price200();

echo $productOne;
echo $productTwo;
