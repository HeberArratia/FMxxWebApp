<?php

namespace FMxx;

use Illuminate\Database\Eloquent\Model as Modelo;
use FMxx\ModelData;
use FMxx\Team;

class Model extends Modelo
{
    protected $table = 'models';

    protected $fillable = [
        'user_id',
    ];

    public function model_datas(){
        return $this->belongsToMany(ModelData::class);
    }

    public function teams(){
        return $this->belongsToMany(Team::class);
    }

    public static $rules = [
        'name'  => "required|max:255",
        'des'   => 'required',
        'path'  => 'required|image|mimes:jpeg,png,jpg,svg|max:8048',
    ];

    public static $niceNames = [
        'name' => 'nombre',
        'des'  => 'descripción',
        'path' => 'modelo',
    ];

}
