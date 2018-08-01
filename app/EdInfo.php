<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EdInfo extends Model
{
    protected $fillable = [
        'id','user_id','degree_level', 'title', 'institute', 'startdate', 'enddate', 'percentage', 'degree_img'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public $timestamps = false;
}
