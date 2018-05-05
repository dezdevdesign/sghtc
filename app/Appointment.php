<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = [];

    public function patient() {
    	return $this->belongsTo('App\Patient');
    }

    public function doctor() {
    	return $this->belongsTo('App\User');
    }

    public function soap() {
    	return $this->hasOne('App\Soap');
    }
}
