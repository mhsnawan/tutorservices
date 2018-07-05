<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'teacher_id','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }

    public $timestamps = false;
}
