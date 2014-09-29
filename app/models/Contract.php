<?php

class Contract extends \Eloquent {
	protected $fillable = [];

    public function client()
    {
        return $this->belongsTo('Client');
    }

    public function languages()
    {
        return $this->morphToMany('Language', 'languagable')->withPivot('language_set');
    }

    public function agencies()
    {
        return $this->hasMany('Agency');
    }

    public function divisions()
    {
        return $this->hasManyThrough('Division', 'Agency');
    }
}