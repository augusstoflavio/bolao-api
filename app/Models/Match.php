<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Match extends Model
{

    protected $fillable = [
        'home_team_id',
        'visiting_team_id',
        'date',
        'goals_home_team',
        'goals_visiting_team',
        'realized'
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function homeTeam(): HasOne
    {
        return $this->hasOne(Team::class, 'home_team_id');
    }

    public function visitingTeam(): HasOne
    {
        return $this->hasOne(Team::class, 'visiting_team_id');
    }
}
