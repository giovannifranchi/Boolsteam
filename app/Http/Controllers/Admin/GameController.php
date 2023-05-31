<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Models\Game;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        $reviews = Review::all();

        return view('admin.games.index', compact('games','reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameRequest $request)
    {
        $data = $request->validated();
        //dd($data);
        $newGames = new Game();
        $newGames->fill($data);
        $newGames->slug = Str::slug($data['game']);
        if(isset($data['thumb'])){
            $newGames->thumb = $data['thumb'];
        }elseif(isset($data['image'])){
           $newGames->thumb = Storage::put('uploads/images/thumbs', $data['image']);
        }


        
        $newGames->save();

        return to_route('admin.games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GameRequest $request, Game $game)
    {
    
        $data = $request->validated();
        
        $game->slug = Str::slug($data['game']);
        
        
        $oldHighlight = Game::where('highlight', 1)->first();

        if($game->highlight === 1 AND !isset($request['highlight']))
        {
            $game->highlight = 0;
        }

        if($game->highlight === 0 AND isset($request['highlight']))
        {
            $game->highlight = 1;
            if($oldHighlight)
            {
                $oldHighlight->highlight = 0;
                $oldHighlight->update();
            }
        }


        $game->update($data);

        return to_route('admin.games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return to_route('admin.games.index');
    }
}
