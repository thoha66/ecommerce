<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'user_id',
        'staff_num',
        'staff_name',
        'staff_gender',
        'staff_phone',
        'staff_email'
    ];

    // Eloquent: Relationships
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function payments(){
        return $this->hasMany('App\Payment');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
}
