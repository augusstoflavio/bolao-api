<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoccerMatch extends Model
{

    protected $table = "matchs";

    protected $fillable = [
        'home_team_id',
        'visiting_team_id',
        'date',
        'goals_home_team',
        'goals_visiting_team',
        'realized',
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
}
