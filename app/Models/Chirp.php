<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Date;

/**
 * @property User $user
 * @property string $message
 */
class Chirp extends Model
{
    protected $fillable = [
        'message'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
