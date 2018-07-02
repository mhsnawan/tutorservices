<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'id','user_id', 'title', 'institute', 'startdate', 'enddate', 'percentage'
    ];

    public function user(){
        return $this->belongsTo('App\Certification');
    }

    public $timestamps = false;
}
