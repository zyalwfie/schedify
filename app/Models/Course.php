<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }

    public function lectures(): BelongsToMany
    {
        return $this->belongsToMany(Lecture::class, 'course_lecture');
    }

    public function scopeSemester(Builder $query, int $semesterId = 2)
    {
        return $query->where('semester_id', '<', $semesterId);
    }
}
