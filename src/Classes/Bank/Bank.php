<?php

namespace Abdulrahman\OopChallenge\Classes\Bank;

abstract class Bank
{
    public $accountNumber;
    public $accountBalance;
    public $customerName;
    public $customerEmail;
    public $customerPhone;

    abstract public function deposit(int $deposit);
    
    abstract public function withdraw(int $withdraw);
}
