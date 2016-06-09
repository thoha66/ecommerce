<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'user_id',
        'admin_num',
        'admin_name',
        'admin_gender',
        'admin_phone',
        'admin_email'
    ];

    // Eloquent: Relationships
    public function user(){
        return $this->belongsTo('App\User');
    }
}
