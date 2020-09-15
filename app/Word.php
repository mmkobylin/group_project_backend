<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        "word",
        "image",
    ];


    public static function random() 
    {
        return Word::all()->random();
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

}
