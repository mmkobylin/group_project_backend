<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class GameResource extends JsonResource
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
            "players" => [ $this->player1, $this->player2, $this->player3, $this->player4 ],
            "word"=> $this->word->word,
            "image"=>$this->word->image,
            //this suppose to pull random word from an array
            "id"=> $this->id,
        ];   
    }
}
