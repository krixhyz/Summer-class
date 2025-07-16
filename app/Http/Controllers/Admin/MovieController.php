<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
public function index()


{   $genres = Genre::orderBy('name', 'ASC')->get();
    $movies = Movie::filterSearch()->filterByGenre()->latest()->get();

   
    return view('admin.movies.index', compact('movies', 'genres'));
   
}

public function delete($movieId){
    Movie::where('id',$movieId)->delete();
    
    toastr()->success('Data has been saved successfully!');


    return redirect() ->route('admin.movies.index');
}
    
public function create()
{
    $genres = Genre::all();
    return view('admin.movies.create', compact('genres'));
}
    
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:55',
    'description' => 'nullable|string',
    'duration' => 'required|numeric|min:1',
    'release_date' => 'required|date',
    'rating' => 'required|numeric|min:0|max:10',
    'genre_id' => 'required|exists:genres,id',
    'language' => 'required|string|max:15',
    'cast' => 'nullable|string',
    ]);
            if ($request->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($request->errors());
            };

    // Store movie in the database
    Movie::create([
        'name' => $request->name,
        'description' => $request->description,
        'duration' => $request->duration,
        'release_date' => $request->release_date,
        'rating' => $request->rating,
        'genre_id' => $request->genre_id,
        'language' => $request->language,
        'cast' => $request->cast,
    ]);


        toastr()->success('Movie added successfully!');
        return redirect()->route('admin.movies.index');
    }


    public function edit($movieId)
    {
        $movie = Movie::where('id', $movieId)->first();
        $genres = Genre::all();

        return view('admin.movies.edit', compact('movie', 'genres'));
    }

    public function update($movieId, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:55',
            'release_date' => 'date',
            'language' => 'max:15',
            'genre_id' => 'required|exists:genres,id',
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        $data = $request->all();
        if ($request->image) {
            $imagePath = $request->file('image')->store('images', 'public');
            unset($data['image']);
            $data['image'] = 'storage/' . $imagePath;
        }
        $movie = Movie::where('id', $movieId)->first();
        $movie->update($data);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('admin.movies.index');
    }

}
