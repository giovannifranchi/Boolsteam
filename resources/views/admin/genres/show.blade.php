@extends('layouts.app')

@section('page.main')
    <div class="container">
        <div class="header my-3">
            <a href="{{ route('admin.genres.index') }}" class="btn btn-danger">Back to the Genres</a>
        </div>
        <h1>{{ $genre->name }}</h1>
       
        <ul>
            <li>Id: {{$genre->id}}</li>
            <li>Slug: {{$genre->slug}}</li>
        </ul>
    </div>
@endsection