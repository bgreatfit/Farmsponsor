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
        return $this->belongsTo('App\User');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function transactionable()
    {
        return $this->morphTo();
    }

    public function getTransactiontypeAttribute()
    {
        switch($this->transactionable_type){
            case 'App\Models\Sponsor':
                return 'Sponsor';
                break;
        }
    }

    public function getAmountAttribute(){
        switch($this->transactionable_type){
            case 'App\Models\Sponsor':
               $sponsorshipDetail = Sponsor::whereUserId($this->user_id)->whereId($this->transactionable_id)->first();
               return 'NGN ' . number_format($this->getTransactionAmount($sponsorshipDetail)) . '.00';
                break;
        }
    }
    public function getTransactionAmount($model){
        return $model->units * $this->getPricePerUnit();
    }

    public function getPricePerUnit(){
        return 100000;
    }
}
