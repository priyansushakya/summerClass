<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $title = 'About_us Page';
        return view('about', compact('title'));
    }
}
