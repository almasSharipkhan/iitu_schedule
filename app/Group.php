<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

    public $table = 'groups';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'speciality_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id');
    }

    public function groupLessons()
    {
        return $this->hasMany(Lesson::class, 'lesson_id', 'id');
    }

    public function groupStudents()
    {
        return $this->hasMany(User::class, 'student_id', 'id');
    }
}
