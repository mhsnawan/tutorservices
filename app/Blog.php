<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'id', 'title', 'description', 'img', 'author'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
