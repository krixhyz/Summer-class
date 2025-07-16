@extends('admin.master') 
@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Users List</h2>


    {{-- Search Form --}}
<form method="GET" action="{{ route('admin.users.index') }}" class="mb-3 d-flex" role="search">
    <input type="text" name="search" class="form-control me-2" placeholder="Search users by name..." value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary">Search</button>
</form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Registered On</th>
                <th>Action</th>
            </tr>
            <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-3">
                Add User
            </a>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d-M-Y') }}</td>
                
                <td>
                <a href="{{route('admin.users.edit', $user->id)}}"><i class="fas fa-edit text-primary"></i></a>
               
                <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this user?')">
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
                <td colspan="4">No users found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
