<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getHome()
    {
        $flowers = Flower::all();
        $category = Category::all();
        if (!Auth::check())
            return view('index', compact('flowers', 'category'));
        else if (Auth::user()->role == "user")
            return view('index', compact('flowers', 'category'));
        else
            return redirect()->route('homeManager');
    }

    public function aboutUs()
    {
        $category = Category::all();
        return view('aboutus', compact('category'));
    }
}
