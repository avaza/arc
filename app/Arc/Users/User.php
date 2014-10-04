<?php namespace Arc\Users;

use Toddish\Verify\Models\User as VerifyUser;

class User extends VerifyUser {

    protected $fillable = ['email', 'password', 'salt', 'verified', 'disabled', 'deleted_at'];
}
