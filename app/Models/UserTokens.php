<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTokens extends Model
{
    protected $fillable = [
        'email', 'token', 'status', 'time_used', 'ip_address'
    ];
}
