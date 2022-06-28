<?php
class Product
{
    private $product;
    private $price;
    private $stock;
    private $animalType;


    function __construct(string $_product, float $_price, int $_stock, $_animalType)
    {
        $this->product = $_product;
        $this->price = $_price;
        $this->stock = $_stock;
        $this->animalType = $_animalType;
    }
}
