<?php namespace Arc\Resources;

use Eloquent;

class Resource extends \Eloquent {
    protected $fillable = ['first_name', 'last_name', 'id_number', 'extension_num', 'extension_pin', 'primary_phone', 'secondary_phone', 'active', 'time_zone'];

    public function user()
    {
        return $this->morphOne('User', 'usable');
    }

    public function languages()
    {
        return $this->morphToMany('Language', 'settable')->withPivot('language_set', 'otp_rate', 'otp_ahup', 'ons_rate', 'ons_ahup', 'vri_rate', 'vri_ahup', 'tsl_rate');
    }

    public function invitations()
    {
        return $this->morphMany('Invitation', 'invitable');
    }
}