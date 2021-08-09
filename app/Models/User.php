<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable, HasRoles;
=======

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;
>>>>>>> 05e7907111da8c5fca88f0407a2d669dfdcb94b8

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

<<<<<<< HEAD
    //Declaring guard name for sptaie/laravel-permissions
    protected $guard_name = 'api';

=======
>>>>>>> 05e7907111da8c5fca88f0407a2d669dfdcb94b8
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

<<<<<<< HEAD
    protected $appends = ['photo_url'];

=======
>>>>>>> 05e7907111da8c5fca88f0407a2d669dfdcb94b8
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

<<<<<<< HEAD
    public function getPermissions()
    {
        return $this->getAllPermissions()->pluck('name');
    }

    /**
     * Get the profile photo URL attribute.
     *
     * @return string
     */
    public function getPhotoUrlAttribute()
    {
        return vsprintf('https://www.gravatar.com/avatar/%s.jpg?s=200&d=%s', [
            md5(strtolower($this->email)),
            $this->name ? urlencode("https://ui-avatars.com/api/$this->name") : 'mp',
        ]);
    }

=======
>>>>>>> 05e7907111da8c5fca88f0407a2d669dfdcb94b8
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
