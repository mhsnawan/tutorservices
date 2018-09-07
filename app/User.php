<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use Notifiable;
    use Searchable;

    const ADMIN_TYPE = '3';
    const DEFAULT_TYPE = 'default';
    public function isAdmin(){        
        return $this->role === self::ADMIN_TYPE;    
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'role', 'cnic', 'phone', 'gender', 'age', 'nationality',
        'address1', 'address2', 'city', 'cnic_img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function searchableAs()
    {
        return 'name';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    public function student(){
        return $this->hasOne('App\Student');
    }

    public function teacher(){
        return $this->hasOne('App\Teacher');
    }

    public function edinfos(){
        return $this->hasMany('App\EdInfo');
    }

    public function certifications(){
        return $this->hasMany('App\Certification');
    }

    public function experiences(){
        return $this->hasMany('App\Experience');
    }

    public function blogs(){
        return $this->hasMany('App\Blog');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

}
