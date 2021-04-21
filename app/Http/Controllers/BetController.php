<?php


namespace App\Http\Controllers;


use App\Models\Bet;
use App\Models\SoccerMatch;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller;

class BetController extends Controller
{
    public function store(Request $request, $match): JsonResponse
    {
        $this->validate($request, [
            'goals_home_team' => 'required|integer',
            'goals_visiting_team' => 'required|integer'
        ]);

        /**
         * @var SoccerMatch $match
         */
        $match =  DB::table('matchs')->find($match);
        if (empty($match)) {
            return response()->json(['status' => 'Partida não encontrada'],404);
        }

        if ($match->date < Carbon::now()->toDateTimeString()) {
            return response()->json(['status' => 'Não é possível apostar mais nessa partida'],405);
        }

        /**
         * @var User $user
         */
        $user = Auth::user();

        Bet::updateOrCreate(
            [
                'user_id' => $user->id,
                'match_id' => $match->id
            ],
            [
                'user_id' => $user->id,
                'match_id' => $match->id,
                'goals_home_team' => $request->goals_home_team,
                'goals_visiting_team' => $request->goals_visiting_team
            ]
        );

        return response()->json(['status' => 'success']);
    }
}
