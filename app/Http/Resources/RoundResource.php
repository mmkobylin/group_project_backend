<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoundResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "game_id" => $this->game->id,
            "round" => $this->round,
            "image_data" => $this->image_data,
            "guess" => $this->guess,
        ];
    }
}
