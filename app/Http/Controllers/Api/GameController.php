<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function games()
    {
        //review non si connette non trova Unknown column 'reviews.game_id' in 'where clause'
        $games = Game::with(['genres', 'developers'])->get();
// dd($games);
        return response()->json($games);
    }

    public function highlighted()
    {
        
        $games = Game::where('highlight', true)->with('genres', 'developers')->first();
        
        return response()->json($games);
    }
}
