<?php

namespace Abdulrahman\OopChallenge\Classes\Bank;

class BankAccount extends Bank
{
    public function deposit(int $deposit)
    {
        $this->setAccountBalance((int) $this->getAccountBalance() + $deposit);
        return $this->getAccountBalance();
    }

    public function withdraw(int $withdraw)
    {
        if ($this->getAccountBalance() < $withdraw) {
            return "Your balance: ".$this->getAccountBalance()." smaller than withdraw: $withdraw";
        }

        $this->setAccountBalance((int) $this->getAccountBalance() - $withdraw);
        return $this->getAccountBalance();
    }

    public function setCustomerName(string $name):void
    {
        $this->customerName = $name;
    }

    public function getCustomerName():string
    {
        return $this->customerName;
    }

    public function setCustomerEmail(string $email):void
    {
        $this->customerEmail = $email;
    }

    public function getCustomerEmail():string
    {
        return $this->customerPhone;
    }

    public function setCustomerPhone(string $phone):void
    {
        $this->customerPhone = $phone;
    }

    public function getCustomerPhone():string
    {
        return $this->customerPhone;
    }

    public function setAccountNumber(int $accountNumber):void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber():int
    {
        return $this->accountNumber;
    }

    public function setAccountBalance(int $accountBalance = 0):void
    {
        $this->accountBalance = $accountBalance;
    }

    public function getAccountBalance():int
    {
        return $this->accountBalance;
    }

    public function registerAccount(string $name, string $email, string $phone, int $accountNumber, int $accountBalance = 0):void
    {
        self::setCustomerName($name);
        self::setCustomerEmail($email);
        self::setCustomerPhone($phone);
        self::setAccountNumber($accountNumber);
        self::setAccountBalance($accountBalance);
    }
}
