@extends('layouts.app')

@section('page.main')

    <div class="container">
        <a href="{{ route('admin.games.index') }}" class="btn btn-danger">Back to the list</a>
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
        <form action="{{ route('admin.games.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="thumb" class="form-label">Image of the Game</label>
                <input type="text" class="form-control" id="thumb" name="thumb"
                    placeholder="Insert the path of game's image">
            </div>
            <div class="mb-3">
                <label for="game" class="form-label">Title of the game</label>
                <input type="text" class="form-control" id="game" name="game" placeholder="Insert Game Title">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Game's Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Insert Game's Genre">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Game's Year</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Insert Game's Year">
            </div>
            <div class="mb-3">
                <label for="dev_link" class="form-label">Developer's Link</label>
                <input type="text" class="form-control" id="dev_link" name="dev_link"
                    placeholder="Insert Developer Link">
            </div>
            <div class="mb-3">
                <label for="dev" class="form-label">Developer's Name</label>
                <input type="text" class="form-control" id="dev" name="dev"
                    placeholder="Insert Developer Name">
            </div>
            <div class="mb-3">
                <label for="publisher_link" class="form-label">Publisher's Link</label>
                <input type="text" class="form-control" id="publisher_link" name="publisher_link"
                    placeholder="Insert Publisher link">
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher's Name</label>
                <input type="text" class="form-control" id="publisher" name="publisher"
                    placeholder="Insert Publisher Name">
            </div>
            <div class="mb-3">
                <label for="platform_link" class="form-label">Platform's Link</label>
                <input type="text" class="form-control" id="platform_link" name="platform_link"
                    placeholder="Insert Platform Link">
            </div>
            <div class="mb-3">
                <label for="platform" class="form-label">Platform's Name</label>
                <input type="text" class="form-control" id="platform" name="platform"
                    placeholder="Insert Platform Name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Game's Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    placeholder="Insert Game's description">
            </div>
            <div class="mb-3">
                <label for="score" class="form-label">Game's score</label>
                <input type="text" class="form-control" id="score" name="score"
                    placeholder="Insert Game's score">
            </div>
            <div class="mb-3">
                <label for="review" class="form-label">Game's Review</label>
                <input type="text" class="form-control" id="review" name="review"
                    placeholder="Insert Game's review">
            </div>
            <div class="mb-3">
                <label for="pegi" class="form-label">Game's Pegi</label>
                <input type="text" class="form-control" id="pegi" name="pegi"
                    placeholder="Insert Game's Pegi">
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
    @endsection