<?php
class Product
{
    private $product;
    private $price;
    private $stock;


    function __construct(string $_product, float $_price, int $_stock)
    {
        $this->product = $_product;
        $this->price = $_price;
        $this->stock = $_stock;
    }
}

$product = new Product('osso di gomma', 12.50, 100);
echo "<pre>";
var_dump($product);
echo "</pre>";
