<?php

class Agency extends \Eloquent {
	protected $fillable = [];

    public function client()
    {
        return $this->belongsTo('Client');
    }

    public function contract()
    {
        return $this->belongsTo('Contract');
    }

    public function divisions()
    {
        return $this->hasMany('Division');
    }
}