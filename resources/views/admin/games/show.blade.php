@extends('layouts.app')



@section('page.main')
<div class="container">
<div class="card">
    <img class="card-img-top w-25" src="@if(Str::startsWith($game->thumb,'http')){{$game->thumb}}@else {{asset('storage/'.$game->thumb)}} @endif" alt="...">
    <div class="card-body">
        <a href="{{$game->game_link}}"><h5 class="card-title">{{$game->game}}</h5></a>
        <p class="card-text">{{$game->genre}}</p>
        <p class="card-text">{{$game->year}}</p>
        <a href="{{$game->dev_link}}"><p class="card-text">{{$game->dev}}</p></a>
        <a href="{{$game->publisher_link}}"><p class="card-text">{{$game->publisher}}</p></a>
        <a href="{{$game->platform_link}}"><p class="card-text">{{$game->platform}}</p></a>
        <p class="card-text">{{$game->description}}</p>
        <p class="card-text">{{$game->score}}</p>
        <p class="card-text">{{$game->review}}</p>
        <p class="card-text">{{$game->pegi}}</p>
        @foreach ($game->developers as $developer)
        <div>Developer:</div>    
        <p>{{ $developer->name }}</p>
        @endforeach
        <a href="{{route('admin.games.index')}}" class="btn btn-success">Back to the list</a>
    </div>
</div>

</div>
@endsection
