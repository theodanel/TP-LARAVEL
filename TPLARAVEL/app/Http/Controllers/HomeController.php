<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home',[ 
            'games' => Game::all()
        ]);
    }

    public function create()
    {
        return view('create');
    }

}