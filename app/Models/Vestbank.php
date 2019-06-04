<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vestbank extends Model
{
    protected $fillable = [
        'user_id', 'capital', 'interest', 'lock'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function transactionlog()
    {
        return $this->morphMany(Transactionlogs::class, 'commentable');
    }

    public function getbalanceForDisplayAttribute()
    {
        return "NGN " . number_format($this->capital + $this->interest) . ".00";
    }
}
