<?php

namespace App;

use App\Models\BankSponsorship;
use App\Models\Transactionlogs;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'firstname', 'lastname', 'username', 'email',
        'password', 'address', 'city','state_id', 'zip',
        'phone', 'bank_id', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cyclesSponsored()
    {
        return $this->hasMany('App\Models\Sponsor');
    }

    public function bankSponsorship()
    {
        return $this->hasMany(BankSponsorship::class);
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }


    public function bank()
    {
        return $this->hasOne('App\Models\Bank');
    }


    public function vestbank()
    {
        return $this->hasOne('App\Models\Vestbank');
    }
}
