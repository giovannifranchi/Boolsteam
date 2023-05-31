@extends('layouts.app')
@section('page.main')
    <div class="container">
        <div class="header my-3 d-flex gap-2">
            <a href="{{ route('admin.games.index') }}" class="btn btn-danger">Back to the home</a>
            <a href="{{ route('admin.genres.create') }}" class="btn btn-primary">Add new Genre</a>
        </div>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Slug</th>
            </tr>
            @foreach ($genres as $genre)
                <tbody>
                    <tr>
                        <td>{{ $genre->id }}</td>
                        <td>{{ $genre->name }}</td>
                        <td>{{ $genre->slug }}</td>
                        <td>
                            <a href="{{ route('admin.genres.show', $genre) }}" role="button" class="btn btn-success">Info</a>
                        </td>
                        <td>
                            <a href="{{ route('admin.genres.edit', $genre) }}" role="button"
                                class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('admin.genres.destroy', $genre) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input id='alert' type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
    </div>
@endsection
