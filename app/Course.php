<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Course extends Model
{

    use Searchable;

    protected $fillable = [
        'id','course_name'
    ];
    
    public $timestamps = false;

    public function searchableAs()
    {
        return 'course';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher');
    }

    public function course_teachers()
    {
        return $this->hasMany('App\CourseTeacher');
    }

    public function course_student_teachers()
    {
        return $this->hasMany('App\CourseStudentTeacher');
    }
}
