<?php namespace Arc\Invitations;

use Eloquent;

class Invitation extends \Eloquent
{
    protected $fillable = ['invitation_code', 'email'];

    public function inviter()
    {
        return $this->belongsTo('User');
    }
}
