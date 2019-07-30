<?php

namespace App\Models;

use App\Models\Farm;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RetainSponsorship
 * @package App
 */
class RetainSponsorship extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'farm_id', 'units',
        'farmable_id', 'farmable_type'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function farmable()
    {
        return $this->morphTo();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }
}
