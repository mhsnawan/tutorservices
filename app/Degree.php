<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $fillable = [
        'id','name'
    ];

    public function subdegrees()
    {
        return $this->hasMany('App\SubDegree');
    }
}
