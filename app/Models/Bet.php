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

    public function tied(): bool {
        return $this->goals_home_team == $this->goals_visiting_team;
    }

    public function homeTeamWon(): bool {
        return $this->goals_home_team > $this->goals_visiting_team;
    }

    public function visitingTeamWon(): bool {
        return $this->goals_home_team < $this->goals_visiting_team;
    }

    public function soccerMatch()
    {
        return $this->hasOne(SoccerMatch::class, "id", "match_id");
    }
}
