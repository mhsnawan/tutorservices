<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'id','user_id', 'title', 'company', 'duration', 'startdate', 'enddate', 'description'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
