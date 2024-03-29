<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BankSponsorship extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'farm_id','units','ip_address', 'user_id',
        'status','approve_user_id','approve_ip_address', 'approved'
    ];

    public function isApproved()
    {
        return $this->status ? true : false;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
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

    public function transaction()
    {
        return $this->morphOne('App\Models\Transactionlogs', 'transactionable');
    }

    public function getAmountAttribute()
    {
        return 'NGN ' . number_format($this->units * $this->getPricePerUnit()) . '.00';
    }

    public function getReturnAttribute()
    {
        $amount = $this->units * $this->getPricePerUnit();
        return 'NGN ' . number_format($amount + ($amount * 0.15)) . '.00';
    }

    public function getPricePerUnit()
    {
        return 100000;
    }

    public function retain()
    {
        return $this->morphMany(RetainSponsorship::class, 'farmable');

    }

    public function hasRetained()
    {
        return $this->retain()->count() == 1 ? true : false;
    }
}
