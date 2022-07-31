<?php declare(strict_types=1);

use Abdulrahman\OopChallenge\Classes\Bank\BankAccount;
use PHPUnit\Framework\TestCase;

class BankAccountTest extends TestCase
{
    public function test_set_customer_name():void
    {
        $account = new BankAccount();
        $account->setCustomerName("Abdulrahman");
        $this->assertSame('Abdulrahman',$account->getCustomerName());
    }
}