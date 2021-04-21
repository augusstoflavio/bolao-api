<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{

    protected $fillable = [
        'user_id',
        'match_id',
        'goals_home_team',
        'goals_visiting_team'
    ];
}
