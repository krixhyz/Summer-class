@extends('admin.master')

@section('title', 'Edit Genre')

@section('content')
<h1 class="mb-4">Edit Genre</h1>

<form action="{{ route('admin.genres.update', $genre->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Genre Name</label>
        <input
            type="text"
            name="name"
            id="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $genre->name) }}"
            maxlength="55"
            required
        >
        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description (optional)</label>
        <textarea
            name="description"
            id="description"
            class="form-control @error('description') is-invalid @enderror"
            rows="3"
        >{{ old('description', $genre->description) }}</textarea>
        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Genre</button>
</form>
@endsection
