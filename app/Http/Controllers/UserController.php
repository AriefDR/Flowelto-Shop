<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getHome()
    {
        if (!Auth::check())
            return view('index');
        else if (Auth::user()->role == "user")
            return view('index');
        else
            return redirect('/manager/home');
    }
}
