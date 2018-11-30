<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class CourseTeacher extends Model
{

    protected $fillable = [
        'id','teacher_id','course_id', 'title', 'area', 'city', 'class',
        'fee', 'type', 'day_from', 'day_to', 'time_from', 'time_to', 'availability', 'description'
    ];

    public $timestamps = false;

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function course_student_teachers()
    {
        return $this->hasMany('App\CourseStudentTeacher');
    }
}
