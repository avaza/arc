<?php namespace Arc\Contracts;

class ContractRepository {

    public function save(Contract $contract)
    {
        return $contract->save();
    }
} 