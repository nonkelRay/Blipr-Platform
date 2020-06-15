<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Venue extends Authenticatable
{
    protected $guard = 'venue';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD

    public function events()
    {
        return $this->hasMany('\App\Event');
    }
=======
>>>>>>> parent of 7fcf52d... Merge pull request #5 from nonkelRay/revert-4-feature/venue-can-login
}
