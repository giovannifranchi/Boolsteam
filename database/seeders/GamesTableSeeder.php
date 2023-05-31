<?php

namespace Database\Seeders;

use App\Models\Game;

use App\Models\Developer;

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

            $newGame->platform = $game['platform'];
            $newGame->publisher = $game['publisher'];

            $newGame->release_date = $game['release_date'];
            $newGame->slug = Str::slug($newGame->game, '-');

            $newGame->price = rand(1, 99);
            
            // $newGame->games_id= $genre->id;

            $newGame->save();


            $genres = Genre::inRandomOrder()->take(3)->get();
            
            $idRand = [];
            foreach($genres as $genre )
            {
                array_push($idRand, $genre->id);
            }
            
            $newGame->genres()->attach($idRand);

            
            $developer = Developer::inRandomOrder()->first();
            $newGame->developers()->attach($developer->id);


            
           

        }
    }
}
