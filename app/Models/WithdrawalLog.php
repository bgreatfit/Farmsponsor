<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class WithdrawalLog extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $dates = [
        'approved_time'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function transaction()
    {
        return $this->morphOne('App\Models\Transactionlogs', 'transactionable');
    }


    public function getDisplayAmountAttribute()
    {
        return 'NGN ' . number_format($this->amount) . '.00';
    }
}
