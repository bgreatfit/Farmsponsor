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

    public function farmingcycle()
    {
        return $this->belongsTo('App\Models\Farm', 'farm_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function transactions()
    {
        return $this->morphMany('App\Models\Transactionlogs', 'transactionable');
    }

    public function getAmountAttribute(){
        return 'NGN ' . number_format($this->units * $this->getPricePerUnit()) . '.00';
    }

    public function getPricePerUnit()
    {
        return 100000;
    }
}
