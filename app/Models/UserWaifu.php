<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserWaifu extends Model
{
     protected $table = 'user_waifus';

    protected $fillable = [
        'user_id',
        'waifu_id',
        'quantity',
        'acquired_at',
    ];

    protected $casts = [
        'acquired_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function waifu(): BelongsTo
    {
        return $this->belongsTo(Waifu::class);
    }
}
