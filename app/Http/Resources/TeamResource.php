<?php


namespace App\Http\Resources;


use App\Models\Team;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    public function toArray($request)
    {
        /**
         * @var Team $team
         */
        $team = $this;

        return [
            "id" => $team->id,
            "name" => $team->name,
            "icon" => $team->icon,
            "initials" => $team->initials,
        ];
    }
}
