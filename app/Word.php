<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        "word",
        "image",
    ];

    // public function game()
    // {
    //     return $this->belongsTo(Game::class);
    // }

}
