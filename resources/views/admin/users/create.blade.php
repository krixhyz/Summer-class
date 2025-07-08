@extends('admin.master')

@section('title', 'Add User')

@section('content')
<h1 class="mb-4">Add New User</h1>

<form action="" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" id="name" class="form-control" maxlength="55" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" maxlength="55" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" name="password" id="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Create User</button>
</form>
@endsection
