@extends('admin.master')

@section('title', 'Movies')

@section('content')
<h1 class="mb-4">Movies</h1>



{{-- Search Form --}}
<form action="{{ route('admin.movies.index') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search Movie here" value="{{ request()->search }}">

                <select name="genre_id">
                    <option value="">Select Genre</option>
                    @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" @if($genre->id == request()->genre_id) selected @endif>{{ $genre->name }}</option>
                    @endforeach
                </select>
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </div>
        </form>



<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Description</th>
            <th>Duration</th>
            <th>Genre</th>
            <th>Release Date</th>
            <th>Rating</th>
            <th>Action</th>
        </tr>

            <a href="{{ route('admin.movies.create') }}" class="btn btn-success mb-3">
                Add Movie
            </a>
    </thead>
    <tbody>
        @foreach($movies as $movie)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->description }}</td>
            <td>{{ $movie->duration }} hours</td>
            <td>{{ $movie->genre->name ?? 'N/A' }}</td>
            <td>{{ \Carbon\Carbon::parse($movie->release_date)->format('d M Y') }}</td>
            <td>{{ $movie->rating }}</td>
            <td>
                <a href="{{ route('admin.movies.edit', $movie->id) }}"><i class="fas fa-edit text-primary"></i></a>
               
                <form action="{{ route('admin.movies.delete', $movie->id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this movie?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-danger p-0" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
