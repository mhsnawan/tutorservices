<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'role', 'cnic', 'phone', 'gender', 'age', 'nationality',
        'address1', 'address2', 'city'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function edinfos(){
        return $this->hasMany('App\EdInfo');
    }

    public function certifications(){
        return $this->hasMany('App\Certification');
    }

    public function experiences(){
        return $this->hasMany('App\Experience');
    }
}
