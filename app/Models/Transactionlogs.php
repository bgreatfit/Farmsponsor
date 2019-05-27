<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactionlogs extends Model
{
    protected  $fillable = [
        'user_id', 'status_id', 'transactionable_id', 'transactionable_type', 'transaction_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactionable()
    {
        return $this->morphTo();
    }
}
