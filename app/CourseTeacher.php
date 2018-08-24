<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CourseTeacher extends Model
{
    protected $fillable = [
        'id','teacher_id','course_id', 'fee', 'type', 'availability', 'description'
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
