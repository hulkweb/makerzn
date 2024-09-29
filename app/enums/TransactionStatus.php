<?php

namespace App\Enums;

class TransactionStatus
{
    static public $SUCCESS;
    static public $FAILED;
    static public $PENDING;

    function __construct()
    {
        $this->SUCCESS = "Success";
        $this->FAILED = "Failed";
        $this->PENDING = "Pending";
    }
}
