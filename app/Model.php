<?php

namespace FMxx;

use Illuminate\Database\Eloquent\Model as Modelo;
use FMxx\ModelData;

class Model extends Modelo
{
    protected $table = 'models';

    protected $fillable = [
        'user_id',
    ];

    public function model_datas(){
        return $this->belongsToMany(ModelData::class);
    }



}
