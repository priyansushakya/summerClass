<?php

namespace App\Http\Controllers\admin;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    public function index(){
        $title = 'Movies';
        $movies = Movie::latest()->get();
        return view('admin.movie.index', compact('title','movies'));
    }

    public function delete($movieId){
        Movie::where('id',$movieId)->delete();
        toastr()->success('Movie has been deleted successfully!');
        return redirect()->route('admin.movie.index');
    }

    public function create(){
        $title = 'Add Movies';
        $genres = Genre::all();
        return view('admin.movie.create', compact('title','genres'));
    }

    public function store(Request $request)
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

        Movie::create($data);

        toastr()->success('Data has been created successfully!');
        return redirect()->route('admin.movie.index');
    }

    public function edit($movieId){
        $title = 'Edit Movies';
        $movie = Movie::where('id', $movieId)->first();
        $genres = Genre::all();

        return view('admin.movie.edit', compact('title','movie', 'genres'));
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
        return redirect()->route('admin.movie.index');
    }
}
