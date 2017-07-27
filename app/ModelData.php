<?php

namespace FMxx;

use Illuminate\Database\Eloquent\Model as Modelo;
use FMxx\Model;

class ModelData extends Modelo
{
    protected $table = 'model_datas';

    protected $fillable = [
        'name',
        'des',
        'path',
    ];

    public function models(){
        return $this->belongsToMany(Model::class);
    }
}
