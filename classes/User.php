<?php
require_once __DIR__ . '/CreditCard.php';
class User
{
    private string $name;
    private string $surname;
    private string $email;
    private int $discount;
    private $creditCard;

    function __construct(string $_name, string $_surname, string $_email, int $_discount)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->discount = $_discount;
    }

    public function setCreditCard()
    {
        $this->creditCard = new CreditCard(mt_rand(100000000000000, 9999999999999999), mt_rand(100, 999), '12/22');
    }
}
