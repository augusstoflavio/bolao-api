<?php
namespace App\Http\Resources;

use App\Models\SoccerMatch;
use App\Models\Team;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class MatchResource extends JsonResource
{

    public function toArray($request)
    {
        /**
         * @var SoccerMatch $match
         */
        $match = $this;

        $homeTeam = new TeamResource(Team::find($match->home_team_id));
        $visitingTeam = new TeamResource(Team::find($match->visiting_team_id));

        $bet = DB::table('bets')
                    ->where("user_id", $request->user()->id)
                    ->where("match_id", $match->id)
                    ->get()->first();

        return [
            "id" => $match->id,
            "home_team" => $homeTeam,
            "visiting_team" => $visitingTeam,
            "date" => $match->date,
            "goals_home_team" => $match->goals_home_team,
            "goals_visiting_team" => $match->goals_visiting_team,
            "bet" => !empty($bet) ? [
                "id" => $bet->id,
                "goals_home_team" => $bet->goals_home_team,
                "goals_visiting_team" => $bet->goals_visiting_team,
                "date" => $bet->created_at
            ] : null
        ];
    }

}
