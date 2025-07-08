@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')
    <h2 class="mb-4">Admin Dashboard</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-secondary text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Total: {{ $statistics['totalUsers'] }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-secondary text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Genres</h5>
                    <p class="card-text">Total: {{ $statistics['totalGenres'] }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-secondary text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Movies</h5>
                    <p class="card-text">Total: {{ $statistics['totalMovies'] }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-secondary text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Movies Watched</h5>
                    <p class="card-text">Total: {{ $statistics['totalMoviesWatched'] }}</p>
                </div>
            </div>
        </div>
    </div>



    <!-- Other Content -->
<div class="card">
    <div class="card-header">Recent Movies</div>
    <div class="card-body">
        <ul>

            @foreach($movies as $movie)
            <li>{{$movie->name}}</li>
            @endforeach
        </ul>
    </div>
</div>


@endsection
