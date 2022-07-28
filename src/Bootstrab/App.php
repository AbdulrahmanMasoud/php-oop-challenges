<?php

namespace Abdulrahman\OopChallenge;

use Abdulrahman\OopChallenge\Classes\Bank\Account;

class App
{
    public static function run()
    {
        $account = new Account();
        $account->depositBalance();
        var_dump($account->withdrawBalance());
    }
}
