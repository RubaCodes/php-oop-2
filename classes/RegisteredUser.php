<?php
require_once __DIR__ . '/User.php';


class RegisteredUser extends User
{
    private bool $registered = false;
    private int $discount = 20;
}
