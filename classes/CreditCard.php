<?php

class CreditCard
{
    private $number;
    private $cvc;
    private $expireDate;
    private $circuit;
    private $name;
    private $surname;


    function __construct(int $_number, int $_cvc, $_expireDate)
    {
        $this->number = $_number;
        $this->cvc = $_cvc;
        $this->expireDate = $_expireDate;
    }
    public function setCreditCardName($_name)
    {
        $this->name = $_name;
    }
    public function setCreditCardSurname($_surname)
    {
        $this->surname = $_surname;
    }
    public function setCreditCircuit($_circuit)
    {
        $this->circuit = $_circuit;
    }
}
