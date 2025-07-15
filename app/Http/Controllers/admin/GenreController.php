<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index(){
        $title= 'Genre';
        $genres = Genre::all();
        return view('admin.genre.index',compact('title', 'genres'));
    }

    public function create(){
         $title= 'Add Genre';
        return view('admin.genre.create', compact('title'));
    }
    
    public function delete($genreId){
        Genre::where('id',$genreId)->delete();
        toastr()->success('Genre has been deleted successfully!');
        return redirect()->route('admin.genre.index');
    }
}
