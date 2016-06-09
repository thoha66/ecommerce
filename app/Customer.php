<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id',
        'customer_num',
        'customer_name',
        'customer_gender',
        'customer_phone',
        'customer_email'
    ];

    // Eloquent: Relationships
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function payments(){
        return $this->hasMany('App\Payment');
    }
}
