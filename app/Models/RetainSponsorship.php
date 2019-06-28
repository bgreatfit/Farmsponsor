<?php

namespace App;

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
        'user_id', 'farm_id', 'units'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function farm()
    {
    return $this->belongsTo(Farm::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
