@extends('admin.master')

@section('title', 'Movies')

@section('content')
<h1 class="mb-4">Movies</h1>

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
                <a href=""><i class="fas fa-edit text-primary"></i></a>
               
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
