<?php namespace Arc\Contracts;

use Eloquent;
use Arc\Contracts\Events\ContractCreated;
use Laracasts\Commander\Events\EventGenerator;

class Contract extends Eloquent {

    use EventGenerator;
    protected $fillable = [];

    public function client()
    {
        return $this->belongsTo('Client');
    }

    public function languages()
    {
        return $this->morphToMany('Language', 'settable')->withPivot('language_set', 'otp_rate', 'otp_ahup', 'ons_rate', 'ons_ahup', 'vri_rate', 'vri_ahup', 'tsl_rate');
    }

    public function agencies()
    {
        return $this->hasMany('Agency');
    }

    public function divisions()
    {
        return $this->hasManyThrough('Division', 'Agency');
    }

    /**
     * Generate a New Contract
     * @param $attributes
     *
     * @raises event
     * @return mixed
     */
    public static function generate($attributes)
    {
        $contract = new static($attributes);

        $contract->raise(new ContractCreated($contract));

        return $contract;
    }
}