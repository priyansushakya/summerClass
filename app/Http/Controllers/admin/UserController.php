<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserController
{
    public function index(){
        $title = 'Users';
        $users = User::all();
        return view('admin.user.index', compact('users','title'));
    }

     public function delete($userId){
        User::where('id',$userId)->delete();
        toastr()->success('User has been deleted successfully!');
        return redirect()->route('admin.user.index');
    }
}
