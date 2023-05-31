@extends('layouts.app')

@section('page.main')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.genres.store') }}" method="POST" enctype="multipart/form-data" class="form-input-image">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Genre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">            
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection