<?php

use Toddish\Verify\Models\User as VerifyUser;

class User extends VerifyUser {

    /**
     * The foreign key relationships
     */
    public function usable()
    {
        return $this->morphTo();
    }


}
