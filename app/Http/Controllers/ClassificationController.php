<?php


namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class ClassificationController extends Controller
{

    public function index(): string
    {
        return response()->json(
            [
                [

                    "player" => "Augusto",
                    "points" => 12
                ],
                [
                    "player" => "Tonny",
                    "points" => 10
                ]
            ]
        );
    }
}
