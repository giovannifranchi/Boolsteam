@extends('layouts.app')

@section('page.main')
    <div class="container my-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.genres.update', $genre->id) }}" method="POST" enctype="multipart/form-data"
            class="form-input-image">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Genre</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('genre'), $genre->name }}">
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection