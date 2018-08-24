<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseStudentTeacher extends Model
{
    protected $fillable = [
        'id','teacher_id', 'student_id', 'course_id'
    ];

    public function course_teacher()
    {
        return $this->belongsTo('App\CourseTeacher');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}