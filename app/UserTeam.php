<?php

namespace FMxx;

use Illuminate\Database\Eloquent\Model;

class UserTeam extends Model
{
    protected $table = 'user_teams';

    protected $fillable = [
        'user_id',
        'team_id',
    ];
}
