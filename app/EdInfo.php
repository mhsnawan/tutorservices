<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EdInfo extends Model
{
    protected $fillable = [
        'edinfo_id','user_id', 'title', 'institute', 'date', 'percentage'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public $timestamps = false;
}
