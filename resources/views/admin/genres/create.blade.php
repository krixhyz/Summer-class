@extends('admin.master')

@section('title', 'Add Genre')

@section('content')
<h1 class="mb-4">Add New Genre</h1>

<form action="{{ route('admin.genres.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Genre Name</label>
        <input type="text" name="name" id="name" class="form-control" maxlength="55" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description (optional)</label>
        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save Genre</button>
</form>
@endsection
