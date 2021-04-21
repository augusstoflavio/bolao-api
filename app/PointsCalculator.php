<?php
namespace App;

use App\Models\Bet;
use App\Models\SoccerMatch;
use Illuminate\Support\Collection;

class PointsCalculator
{
    static function calcBettingPoints(Collection $bets): int {
        return $bets->sum(function (Bet $bet) {
            return PointsCalculator::calcBetPoints($bet);
        });
    }

    static function calcBetPoints(Bet $bet): int {
        /**
         * @var SoccerMatch $soccerMatch
         */
        $soccerMatch = $bet->soccerMatch;

//        Placar exato: 10 pontos;
//        Resultado não exato: 5 pontos;

        // Placar exato
        if (
            $soccerMatch->goals_home_team == $bet->goals_home_team &&
            $soccerMatch->goals_visiting_team == $bet->goals_visiting_team
        ) {
            return 10;
        } else if (
            ($soccerMatch->tied() && $bet->tied()) ||
            ($soccerMatch->visitingTeamWon() && $bet->visitingTeamWon()) ||
            ($soccerMatch->homeTeamWon() && $bet->homeTeamWon())
        ) {
            return 5;
        }

        return 0;
    }
}
