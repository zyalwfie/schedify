<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Day extends Model
{
    public $timestamps = false;

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
