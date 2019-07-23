<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bankfunding extends Model
{
    protected $table = 'bankdeposits';
    protected $fillable = [
        'firstname', 'lastname', 'amount', 'email', 'address', 'approved', 'user_id', 'approve_user_id',
        'approve_ip_address', 'approved_time'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function approved()
    {
        return $this->approved ? true : false;
    }

    public function transaction()
    {
        return $this->morphOne('App\Models\Transactionlogs', 'transactionable');
    }

    public function transactions()
    {
        return $this->morphMany('App\Models\Transactionlogs', 'transactionable');
    }
}
