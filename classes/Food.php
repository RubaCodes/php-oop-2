<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public string $typeOfFood;
    public string $expireDate;
}


$test = new Food('crocchette per cane', 40.3, 200, 'cane');

$test->typeOfFood = 'cibo secco';
$test->expireDate = '12/22';
echo '<pre>';
var_dump($test);
echo '</pre>';
