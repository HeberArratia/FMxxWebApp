<?php

namespace FMxx;

use Illuminate\Database\Eloquent\Model;

class ModelModelData extends Model
{
    protected $table = 'model_model_data';

    protected $fillable = [
        'model_id',
        'model_data_id',
    ];
}
