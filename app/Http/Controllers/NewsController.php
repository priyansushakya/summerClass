<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $title = 'News Page';
        return view('news', compact('title'));
    }
}
