<?php
class Product
{
    private $product;
    private $price;
    private $stock;
    private $category;

    function __construct(string $_product, float $_price, int $_stock, string $_category)
    {
        $this->product = $_product;
        $this->price = $_price;
        $this->stock = $_stock;
        $this->category = $_category;
    }
}

$product = new Product('osso di gomma', 12.50, 100, 'giochi');
echo "<pre>";
var_dump($product);
echo "</pre>";
