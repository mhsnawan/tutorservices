<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id', 'title', 'description', 'img', 'author'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
