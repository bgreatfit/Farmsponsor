<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $fillable = [
        'name','start_date','due_date','units','returns','avatar',
        'user_id', 'ip_address', 'slug'
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
}
