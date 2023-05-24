<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = config('games');

        foreach($games as $game) {

            $newGame = new Game();

            $newGame->game = $game['title'];
            $newGame->game_link = $game['game_url'];
            $newGame->thumb = $game['thumbnail'];
            $newGame->description = $game['short_description'];
            //$newGame->genre = $game['genre'];
            $newGame->platform = $game['platform'];
            $newGame->publisher = $game['publisher'];
            //$newGame->dev = $game['developer'];
            $newGame->release_date = $game['release_date'];
            $newGame->slug = Str::slug($newGame->game, '-');
            
            $genre = Genre::inRandomOrder()->first();
            $newGame->games_id= $genre->id;

            $newGame->save();

            
            //dd($genre->id);
        }
    }
}
