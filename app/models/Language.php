<?php

class Language extends \Eloquent {
	protected $fillable = [];

    public function resources()
    {
        return $this->morphedByMany('Resource', 'languagable')->withPivot('language_set');
    }

    public function contracts()
    {
        return $this->morphedByMany('Contract', 'languagable')->withPivot('language_set');
    }
}