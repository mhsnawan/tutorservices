<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'id','user_id', 'hourly_rate', 'daily_rate', 'weekly_rate', 'monthly_rate'
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
