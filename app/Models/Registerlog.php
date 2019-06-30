<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registerlog extends Model
{
    protected $fillable = [
        'user_id', 'ip_address'
    ];
}
