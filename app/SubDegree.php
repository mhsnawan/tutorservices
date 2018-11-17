<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDegree extends Model
{
    protected $fillable = [
        'id','degrees_id', 'name'
    ];

    public function degree()
    {
        return $this->belongTo('App\Degree');
    }

}
