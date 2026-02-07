<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Waifu extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'image',
        'slug',
        'base_percentage',
        'origin_id',
        'type_id',
        'tier_id',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function origin(): BelongsTo
    {
        return $this->belongsTo(Origin::class, 'origin_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function tier(): BelongsTo
    {
        return $this->belongsTo(Tier::class, 'tier_id');
    }

    public function photos(): HasMany
    {
        return $this->hasMany(WaifuPhoto::class);
    }

    public function userWaifus(): HasMany
    {
        return $this->hasMany(UserWaifu::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_waifus')
            ->withPivot(['quantity', 'acquired_at'])
            ->withTimestamps();
    }
}
