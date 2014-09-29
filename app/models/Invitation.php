<?php

class Invitation extends \Eloquent
{
    protected $fillable = ['invitation_code', 'email'];

    public function inviter()
    {
        return $this->belongsTo('User');
    }
}
