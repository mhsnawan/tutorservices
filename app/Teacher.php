<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'id','user_id', 'day_from', 'day_to', 'time_from', 'time_to'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }

    public function course_teachers()
    {
        return $this->hasMany('App\CourseTeacher');
    }

    public $timestamps = false;
}
