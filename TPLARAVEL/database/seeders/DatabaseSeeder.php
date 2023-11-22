<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Game;
use App\Models\Tag;
use Database\Factories\GameFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Game::factory(30)->create();
        // Tag::factory(10)->create();

        $apiKEY = '1acc688a333a713673ba5711f8f671d0';
        $baseUrl = 'https://api.themoviedb.org/3';
    $tags = Http::withoutVerifying()->get($baseUrl .'/genre/movie/list?api_key=' .$apiKEY)->json('genres'); // On fait une requête sur une API


    foreach ($tags as $tag) {
        // On fait une requête sur l'API pour chaque film afin d'avoir plus de détails
        $tags = Http::withoutVerifying()
            ->get($baseUrl.'/
            tag/'.$tag['id'].'?language=fr-FR&append_to_response=videos&api_key='.$apiKEY)
            ->json();

            Tag::factory()->create([
                'name' => $tag['name'],
            ]);
         };
    }
}
