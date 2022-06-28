<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public string $typeOfFood;
    public string $expireDate;
}
