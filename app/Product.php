<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'staff_id',
        'product_num',
        'product_name',
        'product_price',
        'product_brand',
        'product_type',
        'product_warranty',
        'product_quantity',
        'product_image',
    ];
    // Eloquent: Relationships
    public function staff(){
        return $this->belongsTo('App\Staff');
    }

    public function order_details(){
        return $this->hasMany('App\OrderDetail');
    }
}
