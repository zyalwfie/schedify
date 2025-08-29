<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lecture extends Model
{
    public $timestamps = false;

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_lecture');
    }
}
