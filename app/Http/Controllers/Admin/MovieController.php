<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
public function index()
{
    $movies = Movie::get(); 
    return view('admin.movies.movies', compact('movies'));
}
public function delete($movieId){
    Movie::where('id',$movieId)->delete();
    
    toastr()->success('Data has been saved successfully!');


    return redirect() ->route('admin-movies');
}
    
public function create()
{
    $genres = Genre::all();
    return view('admin.movies.create', compact('genres'));
}


}
