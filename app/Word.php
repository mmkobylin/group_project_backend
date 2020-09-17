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
        $previous_game = Game::all()->reverse()->first();
        $previous_word = $previous_game->word;
        
        return Word::all()->filter(function($word)use($previous_word){
            return $word->id !== $previous_word->id;
        })->random();

        // return Word::all()->random();
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

}
