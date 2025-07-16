@extends('admin.master')

@section('title', 'Add Movie')

@section('content')
<h1 class="mb-4">Add New Movie</h1>

<form action="{{ route('admin.movies.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Movie Name</label>
        <input type="text" name="name" id="name" class="form-control" maxlength="55" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3">
    <label for="duration" class="form-label">Duration (in hours)</label>
    <input type="number" name="duration" id="duration" class="form-control" min="1" step="1" required>
    </div>


    <div class="mb-3">
        <label for="release_date" class="form-label">Release Date</label>
        <input type="date" name="release_date" id="release_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="rating" class="form-label">Rating (out of 10)</label>
        <input type="number" name="rating" id="rating" class="form-control" step="0.1" required>
    </div>

    <div class="mb-3">
        <label for="genre_id" class="form-label">Genre</label>
        <select name="genre_id" id="genre_id" class="form-control" required>
            <option value="">-- Select Genre --</option>
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="language" class="form-label">Language</label>
        <input type="text" name="language" id="language" class="form-control" maxlength="15" value="english">
    </div>

    <div class="mb-3">
        <label for="cast" class="form-label">Cast</label>
        <textarea name="cast" id="cast" class="form-control" rows="2"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save Movie</button>
</form>
@endsection
