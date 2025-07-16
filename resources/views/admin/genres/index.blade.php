@extends('admin.master')

@section('title', 'Genres')

@section('content')
<h1 class="mb-4">Genres</h1>



{{-- Search Form --}}
<form method="GET" action="{{ route('admin.genres.index') }}" class="mb-3 d-flex" role="search">
    <input type="text" name="search" class="form-control me-2" placeholder="Search genres by name..." value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary">Search</button>
</form>


<!-- Add Genre Button -->
<a href="{{ route('admin.genres.create') }}" class="btn btn-success mb-3">
    Add Genre
</a>

<!-- Genre Table -->
<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($genres as $genre)
        <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>{{ $genre->name }}</td>
            <td>{{ $genre->description }}</td>
            <td>{{ $genre->created_at->format('Y-m-d') }}</td>
            <td>
                <a href="{{ route('admin.genres.edit', $genre->id) }}"><i class="fas fa-edit text-primary"></i></a>

                <form action="{{ route('admin.genres.delete', $genre->id) }}" method="POST" style="display: inline;"
                      onsubmit="return confirm('Are you sure you want to delete this genre?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link text-danger p-0" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                     </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">No genres found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
