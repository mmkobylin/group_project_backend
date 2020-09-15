<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        "player1",
        "player2",
        "player3",
        "player4",
        'word_id',
    ];

    public function rounds()
    {
        return $this->hasMany(Round::class);
    }

}
