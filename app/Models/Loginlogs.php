<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loginlogs extends Model
{
    protected $fillable = [
        'email', 'ip_address', 'status'
    ];
}
