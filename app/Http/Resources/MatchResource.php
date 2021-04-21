<?php
namespace App\Http\Resources;

use App\Models\Match;
use App\Models\Team;
use Illuminate\Http\Resources\Json\JsonResource;

class MatchResource extends JsonResource
{

    public function toArray($request)
    {
        /**
         * @var Match $match
         */
        $match = $this;

        $homeTeam = new TeamResource(Team::find($match->home_team_id));
        $visitingTeam = new TeamResource(Team::find($match->visiting_team_id));

        return [
            "id" => $match->id,
            "home_team" => $homeTeam,
            "visiting_team" => $visitingTeam,
            "date" => $match->date,
            "goals_home_team" => $match->goals_home_team,
            "goals_visiting_team" => $match->goals_visiting_team
        ];
    }

}
