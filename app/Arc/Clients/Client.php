<?php namespace Arc\Clients;

use Eloquent;
class Client extends Eloquent {
	protected $fillable = ['first_name', 'last_name', 'time_zone', 'phone', 'phone_ext', 'fax'];

    public function user()
    {
        return $this->morphOne('User', 'usable');
    }

    public function contracts()
    {
        return $this->hasMany('Contract');
    }

    public function agencies()
    {
        return $this->hasMany('Agency');
    }

    public function divisions()
    {
        return $this->hasMany('Divison');
    }

    public function profile()
    {
        return $this->morphOne('Profile', 'profilable');
    }

    public function invitations()
    {
        return $this->morphMany('Invitation', 'invitable');
    }
}