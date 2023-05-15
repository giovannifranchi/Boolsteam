@extends('layout.app')

@section('page.main')

    <div class="container">
        <a href="{{route('games.index')}}" class="btn btn-danger">Back to the list</a>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <form action="{{ route('games.update', $game->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="thumb" class="form-label">Image of the Game</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old("thumb",$game->thumb)}}"
                    placeholder="Insert the path of game's image">
            </div>
            <div class="mb-3">
                <label for="game" class="form-label">Title of the game</label>
                <input type="text" class="form-control" id="game" name="game" value="{{old("game",$game->game)}}"
                    placeholder="Insert Game Title">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Game's Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{old("genre",$game->genre)}}"
                    placeholder="Insert Game's Genre">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Game's Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{old("year",$game->year)}}"
                    placeholder="Insert Game's Year">
            </div>

            <div class="mb-3">
                <label for="dev_link" class="form-label">Developer's Link</label>
                <input type="text" class="form-control" id="dev_link" name="dev_link" value="{{old("dev_link",$game->dev_link)}}"
                    placeholder="Insert Developer Link">
            </div>
            <div class="mb-3">
                <label for="dev" class="form-label">Developer's Name</label>
                <input type="text" class="form-control" id="dev" name="dev" value="{{old("dev",$game->dev)}}"
                    placeholder="Insert Developer Name">
            </div>
            <div class="mb-3">
                <label for="publisher_link" class="form-label">Publisher's Link</label>
                <input type="text" class="form-control" id="publisher_link" name="publisher_link"
                value="{{old("publisher_link",$game->publisher_link)}}" placeholder="Insert Publisher link">
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher's Name</label>
                <input type="text" class="form-control" id="publisher" name="publisher" value="{{old("publisher",$game->publisher)}}"
                    placeholder="Insert Publisher Name">
            </div>
            <div class="mb-3">
                <label for="platform_link" class="form-label">Platform's Link</label>
                <input type="text" class="form-control" id="platform_link" name="platform_link"
                value="{{old("platform_link",$game->platform_link)}}" placeholder="Insert Platform Link">
            </div>
            <div class="mb-3">
                <label for="platform" class="form-label">Platform's Name</label>
                <input type="text" class="form-control" id="platform" name="platform" value="{{old("platform",$game->platform)}}"
                    placeholder="Insert Platform Name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Game's Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old("description",$game->description)}}"
                    placeholder="Insert Game's description">
            </div>
            <div class="mb-3">
                <label for="score" class="form-label">Game's score</label>
                <input type="text" class="form-control" id="score" name="score" value="{{old("score",$game->score)}}"
                    placeholder="Insert Game's score">
            </div>
            <div class="mb-3">
                <label for="review" class="form-label">Game's Review</label>
                <input type="text" class="form-control" id="review" name="review" value="{{old("review",$game->review)}}"
                    placeholder="Insert Game's review">
            </div>
            <div class="mb-3">
                <label for="pegi" class="form-label">Game's Pegi</label>
                <input type="text" class="form-control" id="pegi" name="pegi" value="{{old("pegi",$game->pegi)}}">
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
@endsection