<?php
require_once __DIR__ . '/User.php';


class RegisteredUser extends User
{
    public function setDiscount($_discount)
    {
        $this->discount = $_discount;
    }
    public function setRegistered(bool $_registered)
    {
        $this->registered = $_registered;
    }
}
