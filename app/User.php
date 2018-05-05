<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'address', 'contact', 'role_id', 'department_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function department() {
        return $this->belongsTo('App\Departments');
    }

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function appointments() {
        return $this->hasMany('App\Appointment');
    }
}
