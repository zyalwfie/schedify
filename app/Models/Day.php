<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Day extends Model
{
    public $timestamps = false;

    protected $appends = ['is_today'];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class)
            ->orderBy('start_time', 'asc')
            ->semester();
    }

    public function getIsTodayAttribute(): bool
    {
        $today = strtolower(now()->format('l'));

        return strtolower($this->day_name) === $today;
    }
}
