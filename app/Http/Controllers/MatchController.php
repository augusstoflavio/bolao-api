<?php
namespace App\Http\Controllers;

use App\Http\Resources\MatchCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller;

class MatchController extends Controller
{

    public function index(Request $request): string
    {
        return response()->json(
            new MatchCollection(DB::table('matchs')
                ->paginate($request->per_page ?? 10))
        );
    }
}
