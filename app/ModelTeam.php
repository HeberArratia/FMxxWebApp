<?php

namespace FMxx;

use Illuminate\Database\Eloquent\Model;

class ModelTeam extends Model
{
    protected $table = 'model_teams';

    protected $fillable = [
        'model_id',
        'team_id',
    ];
}
