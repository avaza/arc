<?php namespace Arc\Languages;

use Eloquent;

class Language extends Eloquent {
	protected $fillable = ['language', 'iso_639_code'];

    public function resources()
    {
        return $this->morphedByMany('Resource', 'settable')->withPivot('language_set', 'otp_rate', 'otp_ahup', 'ons_rate', 'ons_ahup', 'vri_rate', 'vri_ahup', 'tsl_rate');
    }

    public function contracts()
    {
        return $this->morphedByMany('Contract', 'settable')->withPivot('language_set', 'otp_rate', 'otp_ahup', 'ons_rate', 'ons_ahup', 'vri_rate', 'vri_ahup', 'tsl_rate');
    }
}