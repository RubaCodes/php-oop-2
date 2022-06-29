<?php
require_once __DIR__ . '/CreditCard.php';
class User
{
    private string $name;
    private string $surname;
    private string $email;
    private $creditCard;
    protected $registered = false;
    protected $discount = 0;

    function __construct(string $_name, string $_surname, string $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    public function setCreditCard()
    {
        $this->creditCard = new CreditCard(mt_rand(100000, 9999999), mt_rand(100, 999), strval(mt_rand(1, 12)) . '/' . strval(mt_rand(2000, 2037)));
        $this->creditCard->setCreditCardName($this->name);
        $this->creditCard->setCreditCardSurname($this->surname);
    }
}
