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
        'email', 'password', 'pseudo', 'birthdate',
    ];


    protected $dates = ['birthdate'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function messages() 
    {
        return $this->hasMany(\App\Messages::class);
    }

    public function friends() 
    {
        return $this->hasMany('App\Friends');
    } 

}
