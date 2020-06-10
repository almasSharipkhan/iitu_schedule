<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speciality extends Model
{
    use SoftDeletes;

    public $table = 'specialities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'code',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function specialityGroups()
    {
        return $this->hasMany(Group::class, 'group_id');
    }
}
