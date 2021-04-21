<?php


namespace App\Http\Resources;


use App\Models\Bet;
use Illuminate\Http\Resources\Json\JsonResource;

class BetResource extends JsonResource
{


    public function toArray($request)
    {
        /**
         * @var Bet $bet
         */
        $bet = $this;

        return [
            "id" => $bet->id,
            "goals_home_team" => $bet->goals_home_team,
            "goals_visiting_team" => $bet->goals_visiting_team,
            "date" => $bet->created_at
        ];
    }
}
