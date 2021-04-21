<?php
namespace App\Http\Controllers;

use App\Models\Bet;
use App\Models\User;
use App\PointsCalculator;
use Laravel\Lumen\Routing\Controller;

class ClassificationController extends Controller
{

    public function index()
    {
        $classification = [];

        $users = User::all();

        /**
         * @var User $user
         */
        foreach ($users as $user) {
            $bets = Bet::where("user_id", $user->id)->get();

            $points = PointsCalculator::calcBettingPoints($bets);

            $classification[] = [
                "player" => $user->name,
                "points" => $points
            ];
        }

        usort($classification, array($this, "sorterClassificaton"));

        return response()->json($classification);
    }

    private function sorterClassificaton($a, $b) {
        return $a["points"] < $b["points"] ? 1 : -1;
    }
}
