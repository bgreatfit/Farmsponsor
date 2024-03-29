<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactionlogs extends Model
{
    use SoftDeletes;

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
                return 'VestBank Sponsor';
                break;
            case 'App\Models\Bankfunding':
                return 'Money Added';
                break;
            case 'App\Models\WithdrawalLog':
                return 'Withdrawal';
                break;

            case 'App\Models\BankSponsorship':
                return 'Bank Sponsorship';
                break;
        }
    }

    public function getAmountAttribute()
    {
        switch($this->transactionable_type){
            case 'App\Models\Sponsor':
               $sponsorshipDetail = Sponsor::whereUserId($this->user_id)->whereId($this->transactionable_id)->first();
               return 'NGN ' . number_format($this->getTransactionAmount($sponsorshipDetail)) . '.00';
                break;
            case 'App\Models\Bankfunding':
               $bankDepositDetail = Bankfunding::whereUserId($this->user_id)->whereId($this->transactionable_id)->first();
               return 'NGN ' . number_format($bankDepositDetail->amount) . '.00';
                break;
            case 'App\Models\WithdrawalLog':
               $withdrawal = WithdrawalLog::whereUserId($this->user_id)->whereId($this->transactionable_id)->first();
               return 'NGN ' . number_format($withdrawal->amount) . '.00';
                break;
            case 'App\Models\BankSponsorship':
                $sponsorshipDetail = BankSponsorship::whereUserId($this->user_id)->whereId($this->transactionable_id)->first();
                return 'NGN ' . number_format($this->getTransactionAmount($sponsorshipDetail)) . '.00';
                break;
        }
    }

    public function getTransactionAmount(Model $model){
        return $model->units * $this->getPricePerUnit();
    }

    public function getPricePerUnit(){
        return 100000;
    }

   public function getReturnsAttribute()
    {
        switch($this->transactionable_type){
            case 'App\Models\Sponsor':
               $sponsorshipDetail = Sponsor::whereUserId($this->user_id)->whereId($this->transactionable_id)->first();
               return 'NGN ' . number_format($this->getReturnsAmount($sponsorshipDetail)) . '.00';
                break;

            case 'App\Models\BankSponsorship':
               $sponsorshipDetail = BankSponsorship::whereUserId($this->user_id)->whereId($this->transactionable_id)->first();
               return 'NGN ' . number_format($this->getReturnsAmount($sponsorshipDetail)) . '.00';
                break;
            // case 'App\Models\Bankfunding':
            //    $bankDepositDetail = Bankfunding::whereUserId($this->user_id)->whereId($this->transactionable_id)->first();
            //    return 'NGN ' . number_format($bankDepositDetail->amount) . '.00';
            //     break;
            // case 'App\Models\WithdrawalLog':
            //    $withdrawal = WithdrawalLog::whereUserId($this->user_id)->whereId($this->transactionable_id)->first();
            //    return 'NGN ' . number_format($withdrawal->amount) . '.00';
            //     break;
        }
    }

    public function getReturnsAmount(Model $model){
        $amount =  $model->units * $this->getPricePerUnit();
        return $amount + ($amount * 0.15);
    }

}
