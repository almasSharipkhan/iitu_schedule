<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auditory extends Model
{
    use SoftDeletes;

    public $table = 'auditories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'capacity',
        'type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function auditoryLessons()
    {
        return $this->hasMany(Lesson::class, 'lesson_id');
    }

    public function auditoryCourses()
    {
        return $this->belongsToMany(Course::class, 'course_id');
    }
}
