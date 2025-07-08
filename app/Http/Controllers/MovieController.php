<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie(){
        $title = 'Movies';
        $movies = Movie::latest()->get();
        return view('admin.movie', compact('title','movies'));
    }

    public function delete($movieId){
        Movie::where('id',$movieId)->delete();
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('admin.movie.index');
    }
}
