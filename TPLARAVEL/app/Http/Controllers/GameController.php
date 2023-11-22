<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show($id)
    {
        $game = Game::findOrFail($id); // Select * from movie where id = :id OU 404

        return view('show', ['game' => $game]);
    }

    public function create()
    { 
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'synopsis' => 'required|min:10',
            'price' => 'required|integer|min:10|max:150',
        ]);

        $game = new Game();
        $game->name = $request->name;
        $game->synopsis = $request->synopsis;
        $game->price = $request->price;
        $game->outofstock = 1;
        $game->image = fake()->imageUrl();
        $game->slug = fake()->slug();
        $game->save();

        return redirect('/');
    }

    public function destroy($id)
    {

        $game = Game::findOrFail($id);


      $game = Game::destroy($id); // DELETE FROM movies WHERE id

        return redirect('/');
    }

    public function edit($id)
    {

        $game = Game::findOrFail($id);

        return view('edit'); 
    }

    public function update(Request $request, $id)
    {

        $game = Game::findOrFail($id);

        $request->validate([
            'name' => 'required|min:2',
            'synopsis' => 'required|min:10',
            'price' => 'required|integer|min:10|max:150',
        ]);

        $game = Game::findOrFail($id);
        $game->name = $request->name;
        $game->synopsis = $request->synopsis;
        $game->price = $request->price;
        $game->outofstock = 1;
        $game->image = fake()->imageUrl();
        $game->slug = fake()->slug();
        $game->save();

        return redirect('/');
    }
}
