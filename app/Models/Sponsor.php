<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'farm_id','units','ip_address', 'user_id',
        'status','approve_user_id','approve_ip_address'
    ];

    public function isApproved()
    {
        return $this->status ? true : false;
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function transactions()
    {
        return $this->morphMany('App\Models\Transactionlogs', 'transactionable');
    }
}
