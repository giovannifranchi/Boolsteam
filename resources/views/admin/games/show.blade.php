@extends('layouts.app')



@section('page.main')
<div class="container">
<div class="card">
    <img class="card-img-top w-25" src="@if(Str::startsWith($game->thumb,'http')){{$game->thumb}}@else {{asset('storage/'.$game->thumb)}} @endif" alt="...">
    <div class="card-body">
        <a href="{{$game->game_link}}"><h5 class="card-title">{{$game->game}}</h5></a>
        <p class="card-text"><strong>Genre:</strong>{{$game->genre}}</p>
        <p class="card-text"><strong>Realese date:</strong>{{$game->year}}</p>
        <a href="{{$game->dev_link}}"><p class="card-text"><strong>Developer link:</strong> {{$game->dev}}</p></a>
        <a href="{{$game->publisher_link}}"><p class="card-text"><strong>Publisher link: </strong>{{$game->publisher}}</p></a>
        <a href="{{$game->platform_link}}"><p class="card-text"><strong>Platform link: </strong>{{$game->platform}}</p></a>
        <p class="card-text"><strong>Description: </strong>{{$game->description}}</p>
        <p class="card-text"><strong>Price: </strong>{{$game->price}}€</p>
        <p class="card-text"><strong>Discount: </strong>{{$game->discount}}%</p>
        <p class="card-text"><strong>Score: </strong>{{$game->score}}</p>
        <p class="card-text"><strong>Review: </strong>{{$game->review}}</p>
        <p class="card-text"><strong>Pegi: </strong>{{$game->pegi}}+</p>
        @foreach ($game->developers as $developer)
        <div><strong>Developer: </strong></div>    
        <p>{{ $developer->name }}</p>
        {{-- <div>HIGHLIGHTED</div> --}}
        @endforeach
        <a href="{{route('admin.games.index')}}" class="btn btn-success">Back to the list</a>
    </div>
</div>

</div>
@endsection


