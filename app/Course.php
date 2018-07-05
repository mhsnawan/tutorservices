<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'id','course_name'
    ];
    
    public $timestamps = false;

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher');
    }
}
