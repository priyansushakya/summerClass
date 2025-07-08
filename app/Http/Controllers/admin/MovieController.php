<?php

namespace App\Http\Controllers\admin;
use App\Models\Movie;
use App\Models\Genre;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie(){
        $title = 'Movies';
        $movies = Movie::latest()->get();
        return view('admin.movie.index', compact('title','movies'));
    }

    public function delete($movieId){
        Movie::where('id',$movieId)->delete();
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('admin.movie.index');
    }

    public function create(){
        $title = 'Add Movies';
        $genres = Genre::all();
        return view('admin.movie.create', compact('title','genres'));
    }
}
