<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bankdeposit extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'amount', 'email', 'address', 'approved', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
