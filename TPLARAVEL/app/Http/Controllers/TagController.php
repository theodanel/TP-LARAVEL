<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    

    public function index ()
    {
        return view ('tags', [
            'tags' => Tag::all()
        ]);
    }

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
