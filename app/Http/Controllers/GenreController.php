<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function genre(){
        $title= 'Genre';
        return view('admin.genre',compact('title'));
    }
}
