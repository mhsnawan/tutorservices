<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class CourseTeacher extends Model
{
    use Searchable;

    protected $fillable = [
        'id','teacher_id','course_id', 'fee', 'type', 'availability', 'description'
    ];

    public $timestamps = false;

    public function searchableAs()
    {
        return 'course_teacher';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

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
