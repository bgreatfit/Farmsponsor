<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $guarded = [];

    protected $dates = [
        'start_date','due_date', 'payout_date'
    ];

    public function isOpen(){
        return $this->status ? true : false;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getAvatarAttribute($value)
    {
        return 'storage/farms/' . $value;
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function sponsors()
    {
        return $this->hasMany('App\Models\Sponsor');
    }

    public function isSoldOut()
    {
        return $this->sold_out == 1 ? true : false;
    }

    public function hasExhaustedUnit()
    {
        return $this->units < 1 ? true : false;
    }

    public function isPaidOut()
    {
        return $this->payout ? true : false;
    }

    public function getEditStartDateAttribute()
    {
         return Carbon::parse($this->start_date)->format('Y-m-d');
    }

    public function getEditDueDateAttribute()
    {
        return Carbon::parse($this->due_date)->format('Y-m-d');
    }

    public function getEditCycleStartDateAttribute()
    {
        return Carbon::parse($this->cycle_start_date)->format('Y-m-d');
    }

    public function getEditCycleEndDateAttribute()
    {
        return Carbon::parse($this->cycle_end_date)->format('Y-m-d');
    }

    public function getEditPayoutDateAttribute()
    {
        return Carbon::parse($this->payout_date)->format('Y-m-d');
    }

}
