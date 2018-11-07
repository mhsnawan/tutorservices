<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'id','user_id', 'company', 'location', 'country', 'title', 'startdate', 'enddate', 'currently_working', 'description', 'experience_img'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public $timestamps = false;
}
