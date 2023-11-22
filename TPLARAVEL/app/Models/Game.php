<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;


    public function tag()
    {
    return $this->belongsTo(Tag::class);

    $tag = Tag::find(1);
    foreach ($tag->tags as $tag) {
        $games = Game::find(1)->tags()->orderBy('name')->get();

        return $this->belongsToMany(Tag::class, 'tag_game');
        }
    }
}
