<?php

namespace App\Enums;

class StatusType
{
    static public $ACTIVE;
    static public $INACTIVE;
    static public $PENDING;

    function __construct()
    {
        $this->ACTIVE = "Active";
        $this->INACTIVE = "Inactive";
        $this->PENDING = "Pending";
    }
}
