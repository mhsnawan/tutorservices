<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'id','user_id', 'title', 'company', 'duration', 'startdate', 'enddate', 'description', 'experience_img'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public $timestamps = false;
}
