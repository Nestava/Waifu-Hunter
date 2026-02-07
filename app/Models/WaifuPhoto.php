<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WaifuPhoto extends Model
{
    protected $fillable = [
        'photo',
        'waifu_id',
    ];

    public function waifu(): BelongsTo
    {
        return $this->belongsTo(Waifu::class);
    }
}
