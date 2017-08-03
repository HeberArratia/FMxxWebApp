<?php

namespace FMxx;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use FMxx\Team;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'name', 'lastname', 'password', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function teams(){
        return $this->belongsToMany(Team::class);
    }

    public static $rules = [
        'email'     => 'required|max:150|unique:users',
        'name'      => "required|max:255",
        'lastname'  => 'required|max:255',
        'password'  => 'required|max:100',
    ];
}
