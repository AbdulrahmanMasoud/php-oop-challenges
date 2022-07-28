<?php

namespace Abdulrahman\OopChallenge\Classes\Bank;

class Account extends BankAccount
{
    public function depositBalance()
    {
        $this->registerAccount('Abdulrahman', 'masoud@mail.com', '+201012895020', rand(1, 99999), 100);

        return $this->deposit(50);
    }

    public function withdrawBalance()
    {
        $this->registerAccount('Abdulrahman', 'masoud@mail.com', '+201012895020', rand(1, 99999), 100);

        return $this->withdraw(50);
    }
}
