<?php

namespace FMxx;

use Illuminate\Database\Eloquent\Model as Modelo;
use FMxx\Model;
use FMxx\User;

class Team extends Modelo
{
    protected $table = 'teams';

    protected $fillable = [
        'user_id',
        'name',
        'des',
    ];

    public function models(){
        return $this->belongsToMany(Model::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public static $rules = [
        'name'  => "required|max:255",
        'des'   => 'required',
    ];

    public static $niceNames = [
        'name' => 'nombre',
        'des'  => 'descripción',
    ];
}
