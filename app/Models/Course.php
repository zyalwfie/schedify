<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    protected function startTime(): Attribute
    {
        return Attribute::make(
            get: fn($v) => $v ? Carbon::createFromFormat('H:i:s', $v)->format('H.i') : null,
            set: fn($v) => $v
                ? Carbon::parse(str_replace('.', ':', $v))->format('H:i:s')
                : null,
        );
    }

    protected function endTime(): Attribute
    {
        return Attribute::make(
            get: fn($v) => $v ? Carbon::createFromFormat('H:i:s', $v)->format('H.i') : null,
            set: fn($v) => $v
                ? Carbon::parse(str_replace('.', ':', $v))->format('H:i:s')
                : null,
        );
    }
}
