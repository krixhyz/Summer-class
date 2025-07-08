<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller{
public function index()
{
    $genres = Genre::all();
    return view('admin.genres.genres', compact('genres'));
}
    public function create()
    {
        return view('admin.genres.create');
    }

    public function delete($genreId){
    Genre::where('id',$genreId)->delete();
    
    toastr()->success('Genre deleted successfully!');


    return redirect() ->route('admin-genres');
    }
   

}