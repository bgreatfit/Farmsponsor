<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public function resolve(User $user)
    {
        $this->update([
            'resolved' => 1,
            'resolved_by' => $user->id
        ]);
    }

    public function unresolve()
    {
        $this->update([
            'resolved' => 0,
            'resolved_by' => null
        ]);
    }

    public function resolver()
    {
        return $this->belongsTo(User::class);
    }

    public function isResolved()
    {
        return $this->resolved === 1? true : false;
    }

    public function getRouteKeyName()
    {
        return 'support_id';
    }
}
