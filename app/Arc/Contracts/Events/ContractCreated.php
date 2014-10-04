<?php namespace Arc\Contracts\Events;

use Arc\Contracts\Contract;

class ContractCreated {

    public $contract;

    function __construct(Contract $contract)
    {
        $this->contract = $contract;
    }
} 