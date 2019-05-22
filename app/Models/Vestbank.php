<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vestbank extends Model
{
    protected $fillable = [
        'user_id', 'standing_order_id', 'amount'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
