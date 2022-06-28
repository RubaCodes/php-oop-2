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
}
