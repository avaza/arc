<?php

class Division extends \Eloquent {
	protected $fillable = [];

    public function client()
    {
        return $this->belongsTo('Client');
    }

    public function agency()
    {
        return $this->belongsTo('Agency');
    }


}