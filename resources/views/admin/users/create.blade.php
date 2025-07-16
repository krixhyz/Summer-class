@extends('admin.master')

@section('title', 'Add User')

@section('content')
<h1 class="mb-4">Add New User</h1>

<form action="{{ route('admin.users.store') }}" method="POST">
    @csrf
    @method(put)
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input
            type="text"
            name="name"
            id="name"
            class="form-control @error('name') is-invalid @enderror"
            maxlength="55"
            value="{{ old('name') }}"
            required
        >
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input
            type="email"
            name="email"
            id="email"
            class="form-control @error('email') is-invalid @enderror"
            maxlength="55"
            value="{{ old('email') }}"
            required
        >
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
            type="password"
            name="password"
            id="password"
            class="form-control @error('password') is-invalid @enderror"
            required
        >
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create User</button>
</form>
@endsection
