<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Eloquent: Relationships
    public function admin(){
        return $this->hasOne('App\Admin');
    }

    public function staff(){
        return $this->hasOne('App\Staff');
    }

    public function customer(){
        return $this->hasOne('App\Customer');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
