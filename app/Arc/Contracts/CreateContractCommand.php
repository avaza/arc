<?php

namespace Arc\Contracts;

class CreateContractCommand {

    public $attributes;

    /**
     * Disperse Contract attributes
     * @param array $attributes
     *
     */
    function __construct($attributes)
    {
        $this->attributes = $attributes;
    }
} 