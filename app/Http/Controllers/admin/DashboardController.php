<?php

namespace App\Http\Controllers\admin;
use App\Models\Movie;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title= 'Admin Dashboard';
        $statistics=[
            'totaluser'=> User::count(),
            'totalmovies'=>Movie::count(),
            'totalgenre'=>Genre::count(),
            'totalmoviewatched'=>1,
        ];
        $movies = Movie::latest()->get(['id','name']); //select * from movies order by id desc
        return view('admin.dashboard.index', compact('title','statistics','movies'));
    }
}
