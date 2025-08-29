<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    public $timestamps = false;

    protected $with = ['day'];

    public function day(): BelongsTo
    {
        return $this->belongsTo(Day::class);
    }

    public function lectures(): BelongsToMany
    {
        return $this->belongsToMany(Lecture::class, 'course_lecture');
    }
}
