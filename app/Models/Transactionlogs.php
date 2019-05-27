<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactionlogs extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactionable()
    {
        return $this->morphTo();
    }
}
