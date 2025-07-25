<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\User;
use App\Models\Genre;

class DashboardController extends Controller
{
    public function index()
    {
      

        $statistics = [
            'totalUsers' => User::count(),
            'totalGenres' => Genre::count(),
            'totalMovies' => Movie::count(),
            'totalMoviesWatched' => 4,
        ];

        $movies = Movie::latest()->take(5)->get(['id', 'name']); // select * from movies order by id desc
        
        return view('admin.dashboard', compact('statistics', 'movies'));
    }
}
