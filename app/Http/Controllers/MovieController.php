<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie(){
        $title = 'Movies';
        return view('admin.movie', compact('title'));
    }
}
