@extends('layouts.app')
@section('page.main')

    <div class="container">
        <!--Title-->
        <h1>Boolsteam</h1>
        <a href="{{ route('admin.games.create') }}" role="button" class="btn btn-primary">Add game</a>

        <table class="table">
            <!--Thead-->
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Date</th>
                <th>Platform</th>
            </tr>
            <!--/Thead-->

            <!--Foreach-->
            @foreach ($games as $game)
                <tbody>
                    <tr>
                        <td>{{ $game->game }}</td>
                        <td>{{ $game->genre }}</td>
                        <td>{{ $game->release_date }}</td>
                        <td>{{ $game->platform }}</td>
                        <td><a href="{{ route('admin.games.show', $game->id) }}" role="button" class="btn btn-success">Info</a></td>
                        <td><a href="{{ route('admin.games.edit', $game->id) }}" role="button" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form action="{{ route('admin.games.destroy', $game->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <a href="{{ route('games.destroy', $game->id) }}" role="button"
                                    class="btn btn-danger">Delete</a> --}}
                                <input id='alert' type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            <!--/Foreach-->
        </table>
    </div>
    @endsection
