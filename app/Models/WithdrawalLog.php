<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WithdrawalLog extends Model
{
    protected $fillable = [
        'user_id','status_id','amount','approved_user_id',
        'ip_address','transaction_id','approved_ip_address',
        'approved_time'
    ];

    protected $dates = [
        'approved_time'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getDisplayAmountAttribute()
    {
        return 'NGN ' . number_format($this->amount) . '.00';
    }
}
