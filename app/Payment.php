<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'customer_id',
        'staff_id',
        'order_id',
        'payment_approve_by_staff_name',
        'payment_method',
        'bank_type',
        'payment_total',
        'payment_transaction_id',
        'payment_transaction_date',
        'payment_resit_image',
        'payment_status',
    ];

    // Eloquent: Relationships
    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function staff(){
        return $this->belongsTo('App\Staff');
    }

    public function order(){
        return $this->belongsTo('App\Order');
    }
}
