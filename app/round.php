<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = [
        "game_id",
        "round",
        "image_data",
        "guess",
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

}
