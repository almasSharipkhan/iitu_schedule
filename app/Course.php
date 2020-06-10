<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    public $table = 'courses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function courseUsers()
    {
        return $this->belongsToMany(User::class, 'teacher_id', 'id');
    }

    public function courseAuditories()
    {
        return $this->hasMany(Auditory::class, 'auditory_id', 'id');
    }

    public function courseLessons()
    {
        return $this->hasMany(Lesson::class, 'lesson_id', 'id');
    }
}
