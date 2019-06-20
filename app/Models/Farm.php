<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $fillable = [
        'name','start_date','due_date','units','returns','avatar',
        'user_id', 'ip_address', 'slug', 'start_unit', 'sold_out',
        'payout'
    ];

    protected $dates = [
        'start_date','due_date'
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
        return $this->sold_out ? true : false;
    }

    public function hasExhaustedUnit()
    {
        return $this->units < 1 ? true : false;
    }

    public function isPaidOut()
    {
        return $this->payout ? true : false;
    }
}
