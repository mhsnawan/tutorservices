<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = [
        'id', 'course_teacher_id', 'user_id', 'rating', 'comment', 'approved'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function course_teacher(){
        return $this->belongsTo('App\CourseTeacher');
    }
}
