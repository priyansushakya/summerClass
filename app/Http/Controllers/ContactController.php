<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $title = 'Contact Page';
        return view('contact', compact('title'));
    }
}
