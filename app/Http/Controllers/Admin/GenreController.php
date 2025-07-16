<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller{
    public function index()
    {
    $genres = Genre::filterSearch()->get(); 

    return view('admin.genres.index', compact('genres'));
    }

    public function create()
    {
        return view('admin.genres.create');
    }

    public function delete($genreId){
    Genre::where('id',$genreId)->delete();
    
    toastr()->success('Genre deleted successfully!');


    return redirect() ->route('admin.genres.index');
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:55',
            'description' => 'nullable|string',
        ]);

        // Store genre in the database
        Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        toastr()->success('Genre added successfully!');
        return redirect()->route('admin.genres.index');
    }

    public function edit($genreId)
    {
    $genre = Genre::findOrFail($genreId);
    return view('admin.genres.edit', compact('genre'));
    }

    public function update(Request $request, $genreId)
    {
    $genre = Genre::findOrFail($genreId);

    $request->validate([
        'name' => 'required|string|max:55',
        'description' => 'nullable|string',
    ]);

    $genre->name = $request->name;
    $genre->description = $request->description;
    $genre->save();

    toastr()->success('Genre updated successfully!');
    return redirect()->route('admin.genres.index');
    }
}