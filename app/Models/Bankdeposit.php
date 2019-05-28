<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bankdeposit extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'amount'
    ];
}
