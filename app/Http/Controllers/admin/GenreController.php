<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function genre(){
        $title= 'Genre';
        $genres = Genre::all();
        return view('admin.genre.index',compact('title', 'genres'));
    }

    public function create(){
         $title= 'Add Genre';
        return view('admin.genre.create', compact('title'));
    }
}
