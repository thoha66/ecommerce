<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'order_total_payment',
        'order_status',
        'order_address'
    ];

    // Eloquent: Relationships
    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function payment(){
        return $this->hasOne('App\Payment');
    }

    public function order_details(){
        return $this->hasMany('App\OrderDetail');
    }
}
