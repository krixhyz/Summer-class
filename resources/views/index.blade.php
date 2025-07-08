@extends('admin.master')

@section('title', 'Movies')

@section('content')
    <div class="text-center mt-5">
        <h1>Welcome to Movies</h1>
        <p class="lead">Browse Movies, TV Shows, Ratings, and More</p>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-warning mt-3">Go to Admin Dashboard</a>
    </div>
@endsection
