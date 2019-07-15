<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'user_id', 'name', 'account_name', 'account_number', 'last_update'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

//    public function getAccountNumberAttribute($value)
//    {
//        return str_pad($this->account_number, 3, '0', STR_PAD_LEFT);
//    }
}
