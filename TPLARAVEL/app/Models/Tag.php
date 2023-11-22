<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function game()
    {
    return $this->belongsTo(Game::class);

    $tag = game::find(1);
    foreach ($tag->games as $game) {
        $games = Tag::find(1)->games()->orderBy('name')->get();

        return $this->belongsToMany(Game::class, 'game_tag');
        }
    }


 
}
