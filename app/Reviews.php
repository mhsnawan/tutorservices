<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = [
        'id', 'course_teacher_id', 'user_id','rating', 'overall_rating', 'punctual_rating', 'subject_rating', 'ability_rating', 'demands_rating', 'comment', 'approved'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function course_teacher(){
        return $this->belongsTo('App\CourseTeacher', 'course_teacher_id');
    }
}
