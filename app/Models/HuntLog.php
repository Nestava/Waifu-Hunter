<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HuntLog extends Model
{
    protected $fillable = [
        'user_id',
        'attacker_waifu_id',
        'target_waifu_id',
        'final_chance',
        'success',
        'roll_value',
    ];

    protected $casts = [
        'final_chance' => 'float',
        'success' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function attackerWaifu(): BelongsTo
    {
        return $this->belongsTo(Waifu::class, 'attacker_waifu_id');
    }

    public function targetWaifu(): BelongsTo
    {
        return $this->belongsTo(Waifu::class, 'target_waifu_id');
    }
}
