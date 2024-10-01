<?php

namespace App\Enums;

class TransactionType
{
    static public $DEPOSIT;
    static public $WITHDRAW;

    function __construct()
    {
        $this->DEPOSIT = "Deposit";
        $this->WITHDRAW = "Withdrawal";
    }
}
