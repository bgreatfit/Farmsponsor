<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $fillable = [
        'name','start_date','due_date','units','returns','avatar',
        'user_id', 'ip_address'
    ];
}
